// import js scripts depending on custom template being used on page/post...
const routes = {
  'page-template-custom-template': 'custom-template.js',
}

const body = document.body;

Object.keys(routes).forEach((className) => {
  // Check if body contains class of template then import necessary script
  if(body.classList.contains(className)) {
    import(
          './custom-templates/'+routes[className]
      )
    }
})
