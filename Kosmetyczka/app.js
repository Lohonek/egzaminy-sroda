const btn = document.querySelector('#btn')
const check1 = document.querySelector('#check1')
const check2 = document.querySelector('#check2')
const check3 = document.querySelector('#check3')
const check4 = document.querySelector('#check4')
const wynik = document.querySelector('#wynik')

btn.addEventListener('click', function () {
  let cena = 0

  if (check1.checked) {
    cena += 45
  }
  if (check2.checked) {
    cena += 30
  }
  if (check3.checked) {
    cena += 20
  }
  if (check4.checked) {
    cena += 5
  }
  wynik.innerHTML = `Cena zabiegow: ${cena}`
})
