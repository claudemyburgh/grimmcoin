import './bootstrap'
import { Livewire } from '../../vendor/livewire/livewire/dist/livewire.esm'
import gsap from 'gsap'
import { SplitText } from 'gsap/SplitText'
import { TextPlugin } from 'gsap/TextPlugin'

Livewire.start()

document.addEventListener('livewire:navigated', (event) => {
    gsap.registerPlugin(SplitText, TextPlugin)

    gsap.from('#moon', {
        rotation: 360,
        duration: 60,
        repeat: -1,
        ease: 'linear', // Keeps the speed constant
        transformOrigin: '50% 50%', // Center of the image
    })

    gsap.to('#moon-container', {
        y: -60, // Move up by 30px
        duration: 5, // Duration of one direction
        repeat: -1, // Repeat infinitely
        yoyo: true, // Reverse after each repeat
        ease: 'sine.inOut', // Smooth easing
    })

    gsap.set('.heading', { opacity: 1 })

    let split = SplitText.create('.heading', { type: 'chars' })

    //now animate each character into place from 20px below, fading in:
    gsap.from(split.chars, {
        y: 10,
        // autoAlpha: 0,
        repeat: -1,
        yoyo: true,
        stagger: 0.01,
    })

    gsap.to('.grimm-head', {
        rotation: () => gsap.utils.random(-5, 5), // small back/forth sway
        duration: () => gsap.utils.random(1.5, 3),
        ease: 'sine.inOut',
        yoyo: true,
        repeat: -1,
    })

    gsap.utils.toArray('.trees').forEach((tree: any) => {
        gsap.to(tree, {
            rotation: () => gsap.utils.random(-7, 7), // small back/forth sway
            duration: () => gsap.utils.random(1.5, 3),
            ease: 'sine.inOut',
            yoyo: true,
            repeat: -1,
        })
    })
})
