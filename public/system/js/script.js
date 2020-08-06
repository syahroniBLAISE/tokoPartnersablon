// halaman paragraf about ----------------------------------------------------------------

const about = document.getElementById('about');
const p = about.getElementsByTagName('p');
p[0].innerHTML = 'Kami menyediakan Jasa Sablon manual yang berkualitas, menggunakan tinta plastisol dan kaos cotton combed 30s/24s dalam produksi, serta kami menyediakan sablon heat press dengan poliflex/vinil untuk pakaian jenis jersey.'

p[1].innerHTML = 'kami juga menjual produk berupa kaso cotton combed 30s/24s dengan kualitas terjamin serta menyediakan jasa cutting stiker untuk modifikasi motor / mobil.'

p[2].innerHTML = 'Tersdia beragam warna dan pilihan dengan bahan berkualitas standar distro yang lembut, dingin, serta menyerap keringat.'

p[3].innerHTML = 'kami memiliki peralatan yang memadai baik untuk mengerjakan lusinan, kodian ataupun hanya satuan.'

const img = about.getElementsByTagName('img');
const h3 = about.getElementsByTagName('h3');

img[0].setAttribute('src', '/img/about01.jpg');
h3[0].innerHTML = 'Kaos Berkualitas'

img[1].setAttribute('src', '/img/about02.jpg');
h3[1].innerHTML = 'Peralatan yang memadai'


// halaman paragraf services ----------------------------------------------------------

const services = document.getElementById('services');
const p1 = services.getElementsByTagName('p');
const h31 = services.getElementsByTagName('h3');
// const h21 = services.getElementsByTagName('h2');
const img1 = services.getElementsByTagName('img');

p1[0].innerHTML = 'Kami mencoba mencari mitra dan menjadi mitra bagi konsumen.'

// img1[0].setAttribute('src', 'http://localhost/landingPagePartnerSablon/system/img/services/s01.jpg');
// img1[1].setAttribute('src', 'http://localhost/landingPagePartnerSablon/system/img/services/s02.jpg');
// img1[2].setAttribute('src', 'http://localhost/landingPagePartnerSablon/system/img/services/s03.jpg');
// img1[3].setAttribute('src', 'http://localhost/landingPagePartnerSablon/system/img/services/s04.jpg');


// h31[0].innerHTML = 'ini artikel services h2-0'
// h31[1].innerHTML = 'ini artikel services h2-1'
// h31[2].innerHTML = 'ini artikel services h2-2'
// h31[3].innerHTML = 'ini artikel services h2-3'



// p1[1].innerHTML = 'ini artikel services p1'
// p1[2].innerHTML = 'ini artikel services p2'
// p1[3].innerHTML = 'ini artikel services p3'
// p1[4].innerHTML = 'ini artikel services p4'


// halaman paragraf Product Gallery ----------------------------------------------------------

const portfolio = document.getElementById('portfolio');
const h22 = portfolio.getElementsByTagName('h2');
const p2 = portfolio.getElementsByTagName('p');

const img2 = portfolio.getElementsByTagName('img');

p2[0].innerHTML = 'Ini beberapa proyek yang kami kerjakan serta produk yang kami tawarkan'


// halaman paragraf Q & A 			----------------------------------------------------------

const testimonials = document.getElementById('testimonials');
const h23 = testimonials.getElementsByTagName('h2');
const p3 = testimonials.getElementsByTagName('p');