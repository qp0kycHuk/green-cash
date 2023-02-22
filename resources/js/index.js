import showPass from "./show-pass";
// import fancybox from "./fancybox";
import theme from './theme';
import inputmask from "./inputmask";
import scrollTo from "./scrollTo";
import datepicker from "./datepicker";
import tab from 'npm-kit-tab';
import toggle from 'npm-kit-toggle';
import ripple from 'npm-kit-ripple';
import Swiper, { Navigation, Pagination, Scrollbar, Autoplay, Grid, Thumbs, EffectFade, Lazy } from 'swiper';
import tippy, { animateFill } from 'tippy.js';

// import '../scss/index.scss';

Swiper.use([Navigation, Pagination, Scrollbar, Autoplay, Grid, Thumbs, EffectFade, Lazy]);
Swiper.defaults.touchStartPreventDefault = false
window.Swiper = Swiper
window.ripple = ripple
window.tippy = tippy
window.addEventListener('DOMContentLoaded', () => loadHandler())

function loadHandler() {
	// fancybox.init()
	showPass.init()
	scrollTo.init()
	tab.init()
	toggle.init()
	ripple.init()
	theme.init()
	datepicker.init()
	inputmask.init(document)

	ripple.attach('.btn')
	ripple.attach('.waved')
	ripple.deAttach('.btn--link')


	tooltipInit()
	Livewire.hook('element.updated', (el, component) => {
		if(el.classList.contains('content-inner')){
			setTimeout(tooltipInit, 250)
		}
	})

	window.addEventListener('toggleopen', toggleopenHaandler)
	window.addEventListener('toggleclose', togglecloseHaandler)
}

function tooltipInit() {
	console.log('tooltipInit');

	const tippyHtmlOpts = {
		allowHTML: true,
		theme: 'gray',
		// trigger: 'click',
		placement: 'top',
		animateFill: true,
		plugins: [animateFill],
		arrow: true,
	}


	tippy('#tooltip-crs', {
		content: `
		<div class="tooltip-title text-body-2 text--demibold mb-2">Conversion Rate Sale</div>
		<div class="text-small mb-2">Коэффициент конверсии. <br> Соотношение посетителей сайта, <br> совершивших покупку к общей аудитории</div>`,
		...tippyHtmlOpts
	});

	tippy('#tooltip-romi', {
		content: `
		<div class="tooltip-title text-body-2 text--demibold mb-2">romi</div>
		<div class="text-small mb-2">Коэффициент конверсии. <br> Соотношение посетителей сайта, <br> совершивших покупку к общей аудитории</div>`,
		...tippyHtmlOpts
	});

	tippy('#tooltip-cps', {
		content: `
		<div class="tooltip-title text-body-2 text--demibold mb-2">cps</div>
		<div class="text-small mb-2">Коэффициент конверсии. <br> Соотношение посетителей сайта, <br> совершивших покупку к общей аудитории</div>`,
		...tippyHtmlOpts
	});
}

function toggleopenHaandler(event) {
	if (event.detail.target.classList.contains('-menu-')) {
		document.body.classList.add('menu-open')
	}
}

function togglecloseHaandler(event) {
	if (event.detail.target.classList.contains('-menu-')) {
		document.body.classList.remove('menu-open')
	}
}

function getImagePreview(file) {
	return new Promise((resolve, reject) => {
		const reader = new FileReader();
		reader.readAsDataURL(file);
		reader.onload = () => {
			if (reader.result) {
				resolve(reader.result.toString())
			} else {
				reject('reader.readAsDataURL Error')
			}
		};

		reader.onerror = () => {
			reject('reader.readAsDataURL Error')
		}

	})
}

document.addEventListener('change', async (event) => {
	if (event.target.closest('[data-image-field]')) {
		const cover = event.target.closest('[data-image-field]')
		const target = cover.querySelector('[data-target]')
		const preview = cover.querySelector('[data-preview]')

		if (event.target.files.length > 0) {
			target.disabled = true
			const dataUrl = await getImagePreview(event.target.files[0])
			preview.src = dataUrl
			target.disabled = false
			cover.classList.add('active')

		} else {
			preview.src = ''
			cover.classList.remove('active')
		}
	}
})

document.addEventListener('click', (event) => {
	if (event.target.closest('[data-image-field]') && event.target.closest('[data-remove]')) {
		const cover = event.target.closest('[data-image-field]')
		const target = cover.querySelector('[data-target]')
		const preview = cover.querySelector('[data-preview]')

		target.value = null
		console.log(target.value, target.files);
		preview.src = ''
		cover.classList.remove('active')
	}
})
