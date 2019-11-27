export class SearchListings {
    constructor(opts) {
        this.defaultOpts = {
            'endpoints': '/wp-json/site-search/v1/search-term/',
            'resultsStageId': '',
            'resultsMax': 10,
            'searchTemplateId': 'search-result-template',
            'searchItemTitle': '',
            'searchItemLink': ''
        }

        this.opts = { ...this.defaultOpts, ...opts };
        this.loadMoreBtn = document.querySelector('[data-search-load-more]');
        if (!this.loadMoreBtn) {
            return;
        }
        this.offset = this.opts.resultsMax;
        this.searchTerm;
        this.resultsStage = document.getElementById(this.opts.resultsStageId);
        this.searchEndpoint = localizedData.siteURL + this.opts.endpoints + this.opts.resultsMax + '/';
        //this.loadMoreBtns = [...document.querySelectorAll('[data-search-load-more')];
        this.setBtnsEvent();
        this.resultsTotal;
        this.results;
        this.template = document.getElementById(this.opts.searchTemplateId);
    }

    setBtnsEvent() {
        this.loadMoreBtn.setAttribute('data-search-offset', this.opts.resultsMax);

        this.loadMoreBtn.addEventListener('click', (e) => {
            e.preventDefault();
            this.searchTerm = this.loadMoreBtn.getAttribute('data-search-term');
            this.offset = parseInt(this.loadMoreBtn.getAttribute('data-search-offset'));
            this.resultsTotal = this.loadMoreBtn.getAttribute('data-search-found');
            this.loadMoreBtn.classList.add('loading');

            if (this.offset < this.resultsTotal) {
                if (this.offset + this.opts.resultsMax > this.resultsTotal) {
                    this.loadMoreBtn.style.display = 'none';
                } else {
                    let offsetAttr = this.offset + this.opts.resultsMax;
                    this.loadMoreBtn.setAttribute('data-search-offset', offsetAttr);
                }
            }

            this.fetchData();
        });

    }

    fetchData(term) {
        window.fetch(this.searchEndpoint + this.offset + '/' + this.searchTerm)
            .then((resp) => resp.json())
            .then((data) => {
                this.results = [...data];
                this.renderResults();
                console.log('FetchData search results = ', data);
            });
    }

    renderResults() {
        this.loadMoreBtn.classList.remove('loading');
        
        if (this.results.length > 0) {

            this.results.forEach((item, index) => {
                let templateClone = document.importNode(this.template.content, true);
                let titleLink = templateClone.querySelector(this.opts.searchItemLinkClass);
                titleLink.innerText = item['title'];
                titleLink.setAttribute('title', item['title']);
                titleLink.setAttribute('href', item['url']);
                this.resultsStage.appendChild(templateClone);
            });
        }
    }
}