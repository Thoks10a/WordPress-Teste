export const markImagesAsLoaded = (el) =>
	el &&
	[...el.querySelectorAll('[class*="ct-image-container"].ct-lazy')].map(
		(el) => {
			if (!el.querySelector('img')) {
				return
			}

			Array.from(
				el.parentNode.querySelectorAll(
					'[class*="ct-image-container"] > img'
				)
			).map((img) => {
				if (!img.dataset.ctLazy) {
					return
				}

				img.setAttribute('src', img.dataset.ctLazy)

				if (
					img.dataset.ctLazySet &&
					img.dataset.ctLazySet !== 'false'
				) {
					img.setAttribute('srcset', img.dataset.ctLazySet)
				}
			})

			el.classList.remove('ct-lazy')
			el.classList.add('ct-lazy-loaded')
		}
	)
