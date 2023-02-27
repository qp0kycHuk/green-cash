import AirDatepicker from 'air-datepicker';
import localeRu from 'air-datepicker/locale/ru';
import { isTouchDevice } from './functions/isTouchDevice';




const init = (root = document.body, options = {}) => {

  const pickers = Array.from(root.querySelectorAll('[data-datepicker]'))
  const minStart = new Date()
  const minEnd = new Date()
  minEnd.setDate(minEnd.getDate() + 2)

  const pickerOptions = {
    locale: localeRu,
    // minDate: minStart,
    // inline: true,
    dateFormat: 'dd.MM.yyyy',
    isMobile: isTouchDevice(),
    autoClose: true,
    ...options
  }



  pickers.forEach(picker => {
    new AirDatepicker(picker, {
      ...pickerOptions,
      position: picker.getAttribute('data-position') || 'bottom center',
    })
  });

  const covers = Array.from(root.querySelectorAll('[data-datepicker-cover]'))
  covers.forEach((cover) => {
    const minEl = cover.querySelector('[data-datepicker-min]')
    const maxEl = cover.querySelector('[data-datepicker-max]')
    let dpMin, dpMax;


    dpMin = new AirDatepicker(minEl, {
      ...pickerOptions,
      position: minEl.getAttribute('data-position') || 'bottom center',
      onSelect(e) {
        Livewire.emit('specificDateMin', e.formattedDate)
        if (e.date) {
          const minDate = e.date
          minDate.setDate(minDate.getDate() + 1)
          dpMax.update({ minDate })
        } else {
          dpMax.update({ minDate: minEnd })
        }
      }
    })
    
    dpMax = new AirDatepicker(maxEl, {
      ...pickerOptions,
      position: maxEl.getAttribute('data-position') || 'bottom center',
      minDate: minEnd,
      onSelect(e) {
        Livewire.emit('specificDateMax', e.formattedDate)
        if (e.date) {
          const maxDate = e.date
          maxDate.setDate(maxDate.getDate() - 1)
          dpMin.update({ maxDate })
        } else {
          dpMin.update({ maxDate: false })
        }
      }
    })

    window.addEventListener('datepicker-reset', e => {
      dpMin.clear({silent: true}),
      dpMax.clear({silent: true})
    })
  })

}

export default { init }