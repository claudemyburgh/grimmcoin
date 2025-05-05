import gsap from 'gsap'
import { SplitText } from 'gsap/SplitText'
import { TextPlugin } from 'gsap/TextPlugin'
import { ScrollTrigger } from 'gsap/ScrollTrigger'

document.addEventListener('livewire:navigated', (event) => {
    gsap.registerPlugin(SplitText, TextPlugin, ScrollTrigger)

    ScrollTrigger.create({
        trigger: '#hero',
        start: 'top bottom', // when top of #hero hits bottom of viewport
        once: true, // only trigger once
        onEnter: () => {
            // Moon rotation
            gsap.from('#moon', {
                rotation: 360,
                duration: 60,
                repeat: -1,
                ease: 'linear',
                transformOrigin: '50% 50%',
            })

            // Moon float
            gsap.to('#moon-container', {
                y: -60,
                duration: 5,
                repeat: -1,
                yoyo: true,
                ease: 'sine.inOut',
            })

            // SplitText animation
            gsap.set('.heading', { opacity: 1 })

            const split = SplitText.create('.heading', { type: 'chars' })

            gsap.from(split.chars, {
                y: 10,
                repeat: -1,
                yoyo: true,
                stagger: 0.01,
            })

            // Grimm head sway
            gsap.to('.grimm-head', {
                rotation: () => gsap.utils.random(-5, 5),
                duration: () => gsap.utils.random(1.5, 3),
                ease: 'sine.inOut',
                yoyo: true,
                repeat: -1,
            })

            // Trees sway
            gsap.utils.toArray('.trees').forEach((tree: any) => {
                gsap.to(tree, {
                    rotation: () => gsap.utils.random(-7, 7),
                    duration: () => gsap.utils.random(1.5, 3),
                    ease: 'sine.inOut',
                    yoyo: true,
                    repeat: -1,
                })
            })
        },
    })

    gsap.utils.toArray('.box').forEach((box: any, index) => {
        const fromX = index % 2 === 0 ? -100 : 100 // even: left, odd: right
        gsap.fromTo(
            box,
            { opacity: 0, x: fromX },
            {
                opacity: 1,
                x: 0,
                duration: 0.8,
                ease: 'back.out',
                scrollTrigger: {
                    trigger: box,
                    start: 'top 80%',
                    toggleActions: 'restart none none reverse',
                },
            }
        )
    })
})
