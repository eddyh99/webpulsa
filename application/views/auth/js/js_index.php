<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>  
    // For Carausel Use owl-carausel
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 5000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    })

    $(document).ready(function(){
        Swal.fire({
            title: 'Selamat Datang Di Web Pulsa ',
            icon: 'info',
            iconHtml: '',
            html: '<p class="text-start">Pengguna Baru ?</p>' + 
            '<a class="fs-6 text-start d-block ms-5 text-success text-decoration-underline" href="#"><i class="fa-brands fa-whatsapp me-2"></i>Whatsapp Sekarang</a>' + 
            '<p class="mt-3 text-start">Pengguna Lama ?</p>' +
            '<a class="fs-6 text-start d-block ms-5 text-secondary" href="#">Yuk Lanjutkan Transaksinya</a>' 
            ,
            confirmButtonText: 'ok',
            showCloseButton: true
        })
    });
    
</script>