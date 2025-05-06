import axios from 'axios'

import.meta.glob(['../img/**/*.{webp,png,svg,jpeg,jpg}'])

declare global {
    interface Window {
        axios: any
        solanaWeb3: any
        Buffer: any
        process: any
    }
}

window.axios = axios

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'
