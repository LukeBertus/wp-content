AOS.init({
    once: true,
    duration: 1000,
});

import HeaderJS from './modules/header.js'
import ReasonHeight from './modules/reasonHeight.js'
import Pitch from './modules/pitch.js'
import Cms from './modules/cms.js'
import Money from './modules/money.js'

const headerJS = new HeaderJS()
const reasonHeight = new ReasonHeight()
const cms = new Cms()
const money = new Money()