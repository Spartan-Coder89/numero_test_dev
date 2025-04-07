document.addEventListener("DOMContentLoaded", () => {

  gsap.registerPlugin(ScrollTrigger)
  
  function animate_hero_banner() {

    let timeline = gsap.timeline()

    timeline
    .from('#hero_banner', {
      duration: 1,
      x:'-34px',
      opacity: 0,
      ease: 'power1.inOut'
    })
    .from('#headline', {
      duration: 0.3,
      x:'-24px',
      opacity: 0,
      ease: 'sine.inOut'
    })
    .from('#headline > div > *', {
      x: '-24px',
      opacity: 0,
      ease: 'sine.inOut',
      stagger: 0.3
    })
    .from('#below_hero_banner', {
      duration: 0.3,
      scaleY: 0,
      ease: 'power1.inOut'
    })
    .from('#below_hero_banner .wrap > *', {
      duration: 0.3,
      y: '24px',
      opacity: 0,
      ease: 'power.inOut',
      stagger: 0.3
    })
  }

  function animate_below_banner() {
    
    let timeline = gsap.timeline({
      scrollTrigger: {
        trigger: '#after_banner .wrap',
        start: 'top center'
      }
    })

    timeline
    .from('#after_banner .img', {
      duration: 0.3,
      x: '-30px',
      opacity: 0,
      ease: 'sine.inOut'
    })
    .from('#after_banner .details', {
      duration: 0.3,
      x: '-30px',
      opacity: 0,
      ease: 'sine.inOut'
    })
  } 

  function animate_we_are_specialist() {

    let timeline = gsap.timeline({
      scrollTrigger: {
        trigger: '#we_are_specialist',
        start: 'bottom bottom'
      }
    })

    timeline
    .from('#we_are_specialist', {
      duration: 0.5,
      scaleY: 0,
      ease: 'sine.inOut'
    })
    .from('#we_are_specialist .wrap > *', {
      duration: 0.5,
      y: '-24px',
      opacity: 0,
      ease: 'sine.inOut',
      stagger: 0.5
    })
  }

  function animate_homes_for_sale() {

    let timeline = gsap.timeline({
      scrollTrigger: {
        trigger: '#homes_for_sale .wrap',
        start: 'top center'
      }
    })

    timeline
    .from('#homes_for_sale .section_title', {
      duration: 0.3,
      x: '-24px',
      opacity: 0,
      ease: 'sine.inOut'
    })

    if (document.querySelectorAll('#homes_for_sale #homes_list > *').length > 0) {

      timeline
      .from('#homes_for_sale #homes_list > *', {
        duration: 0.2,
        y: '24px',
        opacity: 0,
        ease: 'sine.inOut',
        stagger: 0.2
      })
    }
  }

  function animate_our_services() {

    let timeline = gsap.timeline({
      scrollTrigger: {
        trigger: '#our_services',
        start: 'top center'
      }
    })

    timeline
    .from('#our_services', {
      duration: 0.5,
      x: '24px',
      opacity: 0,
      ease: 'sine.inOut'
    })
    .from('#our_services .wrap section > *', {
      duration: 0.3,
      x: '24px',
      opacity: 0,
      ease: 'sine.inOut',
      stagger: 0.3
    })
  }

  function animate_cta_section() {

    let timeline = gsap.timeline({
      scrollTrigger: {
        trigger: '#cta_section',
        start: 'top center'
      }
    })

    timeline
    .from('#cta_section .top', {
      duration: 0.5,
      x: '24px',
      opacity: 0,
      ease: 'sine.inOut'
    })
    .from('#cta_section .top .left', {
      duration: 0.3,
      x: '-24px',
      opacity: 0,
      ease: 'sine.inOut'
    })
    .from('#cta_section .top .right', {
      duration: 0.3,
      x: '24px',
      opacity: 0,
      ease: 'sine.inOut'
    })
    .from('#cta_section .bottom', {
      duration: 0.5,
      x: '-24px',
      opacity: 0,
      ease: 'sine.inOut'
    })
    .from('#cta_section .bottom .right', {
      duration: 0.3,
      x: '24px',
      opacity: 0,
      ease: 'sine.inOut'
    })
    .from('#cta_section .bottom .left', {
      duration: 0.3,
      x: '-24px',
      opacity: 0,
      ease: 'sine.inOut'
    })
  }

  function animate_testimonials_section() {

    let timeline = gsap.timeline({
      scrollTrigger: {
        trigger: '#testimonials_section .testimonials_wrap',
        start: 'top center'
      }
    })

    timeline
    .from('#testimonials_section .testimonials_wrap > *', {
      duration: 0.3,
      x: '-24px',
      opacity: 0,
      ease: 'sine.inOut',
      stagger: 0.3
    })
  }

  function animate_get_in_touch() {

    gsap.from('#get_in_touch .get_in_touch_form', {
      scrollTrigger: {
        trigger: '#get_in_touch',
        start: 'top center'
      },
      duration: 0.5,
      x: '-24px',
      opacity: 0,
      ease: 'sine.inOut'
    })

    gsap.from('#get_in_touch .img', {
      scrollTrigger: {
        trigger: '#get_in_touch .wrap',
        start: 'top center'
      },
      duration: 0.5,
      x: '24px',
      opacity: 0,
      ease: 'sine.inOut'
    })
  }

  animate_hero_banner()
  animate_below_banner()
  animate_we_are_specialist()
  animate_homes_for_sale()
  animate_our_services()
  animate_cta_section()
  animate_testimonials_section()
  animate_get_in_touch()
})