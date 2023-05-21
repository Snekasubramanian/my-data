 <div class="footer-design">
     <div class="">

         <h6>Designed & Developed by</h6>
         <h2>Sneka Subramanian</h2>
         <div class="so_c my-3 d-flex-al-jc">
             <a href="https://github.com/Snekasubramanian/"><i class="fa-brands fa-github"></i></a>
             <a href="https://www.behance.net/ssneka"><i class="fa-brands fa-behance"></i></a>
             <a href="https://www.linkedin.com/in/s-sneka-a05123274"><i class="fa-brands fa-linkedin-in"></i></a>
         </div>
     </div>
 </div>
 <!-- footer ends -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.3/venobox.min.js"></script>
 <script src="https://unpkg.com/ityped@0.0.10"></script>

 <!-- venobox ends -->

 <script>
     //cursor
     const updateProperties = (elem, state) => {
         elem.style.setProperty("--x", `${state.x}px`);
         elem.style.setProperty("--y", `${state.y}px`);
         elem.style.setProperty("--width", `${state.width}px`);
         elem.style.setProperty("--height", `${state.height}px`);
         elem.style.setProperty("--radius", state.radius);
         elem.style.setProperty("--scale", state.scale);
     };

     document.querySelectorAll(".cursor").forEach((cursor) => {
         let onElement;

         const createState = (e) => {
             const defaultState = {
                 x: e.clientX,
                 y: e.clientY,
                 width: 20,
                 height: 20,
                 radius: "50%",
             };

             const computedState = {};

             if (onElement != null) {
                 const {
                     top,
                     left,
                     width,
                     height
                 } = onElement.getBoundingClientRect();
                 const radius = window.getComputedStyle(onElement).borderTopLeftRadius;

                 computedState.x = left + width / 2;
                 computedState.y = top + height / 2;
                 computedState.width = width;
                 computedState.height = height;
                 computedState.radius = radius;
             }

             return {
                 ...defaultState,
                 ...computedState,
             };
         };

         document.addEventListener("mousemove", (e) => {
             const state = createState(e);
             updateProperties(cursor, state);
         });


     });
 </script>
 <!-- coursor -->
 <!--menubutton  -->
 <script>
     function menuBtnFunction(menuBtn) {
         menuBtn.classList.toggle("active");
     }
 </script>
 <!--menubutton  -->
 <!-- typed -->
 <script>
     window.ityped.init(document.querySelector('.ab_page'), {
         strings: ['UI/UX Developer'],
         typeSpeed: 200,
         backSpeed: 70,
         loop: true
     })
 </script>
 <!-- typed end -->
 <!-- scrooll   -->
 <script>
     $(window).scroll(function() {
         if ($(this).scrollTop() > 100) {
             $('.nav-menu').addClass('sticky')
         } else {
             $('.nav-menu').removeClass('sticky')
         }
     });
 </script>
 <!-- scrooll end -->