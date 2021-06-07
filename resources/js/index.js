document.addEventListener('DOMContentLoaded', () => {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 280) {
            document.querySelector('#scroll-top').style.display = 'flex'
        } else {
            document.querySelector('#scroll-top').style.display = 'none'
        }
    })
})
