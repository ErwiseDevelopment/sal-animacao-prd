// (function() {
//     if( document.querySelector( '.js-swiper-founder' ) ) {
//         setTimeout( function() {
//             const slides = document.getElementsByClassName( 'js-swiper-slide-founder' )
//             const prev = document.querySelector( '.js-swiper-button-prev-founder' )
//             const next = document.querySelector( '.js-swiper-button-next-founder' )
//             let prevName = ''
//             let nextName = ''

//             for( const i of slides ) {                
//                 if( i.classList.contains( 'swiper-slide-active' ) ) {
//                     // prevName = prev.children[0]
//                     // prevName.innerHTML = i.dataset.name
//                     prev.innerText = i.dataset.name
//                 }

//                 if( i.classList.contains( 'swiper-slide-next' ) ) {
//                     // nextName = next.children[0]
//                     // nextName.innerHTML = i.dataset.name
//                     next.innerText = i.dataset.name
//                 }
//             }

//             prev.addEventListener( 'click', function() {
//                     for( const j of slides ) {
//                         if( j.classList.contains( 'swiper-slide-prev' ) ) {
//                             // prevName = prev.children[0]
//                             // prevName.innerHTML = j.dataset.name
//                             prev.innerText = j.dataset.name
//                         }

//                         if( j.classList.contains( 'swiper-slide-next') ) {
//                             // nextName = next.Children[0]
//                             // nextName.innerHTML = j.dataset.name
//                             next.innerText = j.dataset.name
//                         }
//                     }
//             })

//             next.addEventListener( 'click', function() {
//                 for( const k of slides ) {
//                     if( k.classList.contains( 'swiper-slide-next' ) ) {
//                         // nextName = next.children[0]
//                         // nextName.innerHTML = k.dataset.name
//                         this.innerText = k.dataset.name
//                     }

//                     if( k.classList.contains( 'swiper-slide-prev' ) ) {
//                         // prevName = prev.childre[0]
//                         // prevName.innerHTML = k.dataset.name
//                         prev.innerText = k.dataset.name
//                     }
//                 }
//             })
//         }, 3000)
//     }
// })()