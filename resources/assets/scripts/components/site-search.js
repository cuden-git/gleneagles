export class SiteSearch {

    constructor(searchEleHook,opts) {
        // this.opts = opts;
        this.defaultOpts = {
            'endpoints': '/wp-json/site-search/v1/search-term/-1/0/',
            'formClass': 'site-search__form',
            'resultsStageClass': 'site-search__results',
            'viewAllClass': 'site-search__view-all',
            'charTrigger': 3,
            'resultsMax': 10,
            'formActiveClass': 'active',
            'showSubmitClass': 'show-button',
            'resultsActiveClass': 'active',
            'noResultsMessage': 'No Results Found',
            'noTriggers': false
        }
        this.opts = { ...this.defaultOpts, ...opts };
        this.searchStage = document.getElementsByClassName(searchEleHook)[0];
        if(!this.searchStage) {
            return;
        }
        this.form = this.searchStage.getElementsByClassName(this.opts.formClass)[0];
        this.docBody = document.getElementsByTagName('body')[0];
        this.btnClose = [...document.querySelectorAll('[data-js-search-close]')];
        this.searchTriggers = [...document.querySelectorAll('[data-search-trigger]')];
        this.searchInput = this.searchStage.querySelector('input[type=text]');
        this.resultsStage = this.searchStage.getElementsByClassName(this.opts.resultsStageClass)[0];
        this.setSearchEles();
        this.searchEndpoint = localizedData.siteURL + this.opts.endpoints;//'/wp-json/site-search/v1/search-term/';
        this.results = [];
        this.resultsFound = 0;
        this.setTriggers();
        this.currentSelection = 0; 
       // this.navigateResults(); needs more work
    }

    setSearchEles() {

        this.searchInput.addEventListener('input', (e) => {
            let charCount = this.countInputChars(this.searchInput);

            if (charCount[1] >= this.opts.charTrigger) {
                this.resultsStage.classList.add(this.opts.resultsActiveClass);
                this.submitSearchTerm(charCount[0], this.resultsStage);
            } else {
                this.clearResultsStage();
            }

            if (charCount[1] >= 1) {
                this.form.classList.add(this.opts.showSubmitClass);
            }else{
                this.form.classList.remove(this.opts.showSubmitClass);
            }
        });

        this.searchInput.addEventListener('focus', (e) => {
            this.form.classList.add(this.opts.formActiveClass);
        });

        this.form.addEventListener('submit', (e) => {
            if(this.countInputChars(this.searchInput)[1] < 1) {
                e.preventDefault();
            }
            
        });
    }

    countInputChars(input) {
        return [input.value, input.value.length]
    }

    submitSearchTerm(term) {
        window.fetch(this.searchEndpoint + encodeURIComponent(term))
            .then((resp) => resp.json())
            .then((data) => {
                this.showResults(data);
                this.resultsFound = data.length;
            });
    }

    showResults(data) {
        if (data.length > 0) {
            let resultsList = document.createElement('ul');
            this.clearResultsStage();
            this.results.length = 0;

            data.forEach((item, index) => {
                if (index < this.opts.resultsMax) {
                    var listItem = document.createElement('li');
                    let listItemLink = document.createElement('a');
                    listItemLink.setAttribute('href', item['url']);
                    listItemLink.setAttribute('title', item['title']);
                    listItemLink.innerText = item['title'];
                    listItem.appendChild(listItemLink);
                    resultsList.appendChild(listItem);
                    this.results.push(listItemLink);
                }
            });

            if(data.length > this.opts.resultsMax) {
                let resultsFoundMsg = document.createElement('li');
                let viewAllMsg = document.createElement('span');
                viewAllMsg.innerText = ' ...view all';
                viewAllMsg.classList.add(this.opts.viewAllClass);
                resultsFoundMsg.innerText = 'Results found: ' + data.length;
                resultsFoundMsg.appendChild(viewAllMsg);
                resultsFoundMsg.setAttribute('data-search-results-msg','');
                viewAllMsg.addEventListener('click', () => {
                    this.form.submit();
                });

                resultsList.appendChild(resultsFoundMsg);
                
                console.log('this.results = ',this.results);
            }

            this.resultsStage.appendChild(resultsList);
        } else {
            this.resultsStage.innerText = this.opts.noResultsMessage;
        }

        console.log('results data = ', data);
    }

    clearResultsStage() {
        this.resultsStage.innerText = '';
    }

    clearInput() {
        this.searchInput.value = "";
    }

    setTriggers() {

        if(this.opts.noTriggers) {
            return;
        }

        this.searchTriggers.forEach((item, index) => {
            item.addEventListener('click', (e) => {
                this.searchStage.classList.add(this.opts.resultsActiveClass);
                this.bodyScrollToggle();
                this.searchInput.focus();
            });
        });

        this.btnClose.forEach((item, index) => {
            item.addEventListener('click', (e) => {
                this.searchStage.classList.remove(this.opts.resultsActiveClass);
                this.bodyScrollToggle();
                this.clearResultsStage();
                this.form.classList.remove(this.opts.showSubmitClass);
                this.clearInput();
            });
        });
    }

    bodyScrollToggle() {
        this.docBody.style.overflow = (this.docBody.style.overflow === 'hidden') ? '' : 'hidden';
    }

    navigateResults() {
        document.addEventListener("keydown", (e) => {
            if(this.resultsFound === 0) {
                return;
            }

            switch (e.key) {
                case 'ArrowUp':
                case 'Up':
                    if(this.currentSelection > 0 && this.currentSelection < this.results.length) {
                        --this.currentSelection;
                        this.results[this.currentSelection].focus();
                    }
                    break;
                case 'ArrowDown':
                case'Down':
                    if(this.currentSelection < this.results.length) {
                        this.results[this.currentSelection].focus();
                        ++this.currentSelection;
                    }
                    break;
            }
        });
    }
}