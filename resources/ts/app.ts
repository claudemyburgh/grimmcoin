import './bootstrap'
import './hero'
import { Livewire } from '../../vendor/livewire/livewire/dist/livewire.esm'

Livewire.start()

document.addEventListener('livewire:navigated', (event) => {})
