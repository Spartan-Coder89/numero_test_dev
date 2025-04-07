document.addEventListener('DOMContentLoaded', () => {

  sticky_header()

  document.getElementById('mobile_menu_open').addEventListener('click', () => {
    document.getElementById('mobile_main_nav').classList.add('show')
  })
  
  document.getElementById('mobile_menu_close').addEventListener('click', () => {
    document.getElementById('mobile_main_nav').classList.remove('show')
  })

  window.addEventListener('scroll', () => {
    sticky_header()
  })
})

function sticky_header() {

  if (window.pageYOffset > document.querySelector('header').offsetHeight) {
    document.querySelector('header').classList.add('sticky')
    
  } else {
    if (document.querySelector('header').classList.contains('sticky')) {
      document.querySelector('header').classList.remove('sticky')
    }
  }
}