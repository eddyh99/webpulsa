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
    
    function getprovider(){
        $.ajax({
            url: "<?=base_url()?>transaksi/getbrand",
            type: "post",
            data: "jenis="+$("#tipeproduk").val(),
            success: function (data){
                data=JSON.parse(data);
                var selectProduk = document.getElementById("provider");
                for (i = selectProduk.options.length - 1; i > 0; i--) {
                    selectProduk.remove(i);
                }
                
                option = document.createElement("OPTION"),
                txt = document.createTextNode("-- Provider --");
                option.appendChild(txt);
                option.setAttribute("disabled",true);
                option.setAttribute("selected",true);
                
                for (var i = 0; i < data.length; i++) {
                    var option = document.createElement("OPTION"),
                        txt = document.createTextNode(data[i].brand);
                    option.appendChild(txt);
                    option.setAttribute("value", data[i].brand);
                    selectProduk.insertBefore(option, selectProduk.lastChild);
                }
            }
        });        
    }
    
    function getvoucher(){
        $.ajax({
            url: "<?=base_url()?>transaksi/getvoucher",
            type: "post",
            data: "jenis="+$("#tipeproduk").val()+'&brand='+$("#provider").val(),
            success: function (data){
                data=JSON.parse(data);
                var selectProduk = document.getElementById("voucher");
                for (i = selectProduk.options.length - 1; i > 0; i--) {
                    selectProduk.remove(i);
                }
                
                option = document.createElement("OPTION"),
                txt = document.createTextNode("-- Voucher --");
                option.appendChild(txt);
                option.setAttribute("disabled",true);
                option.setAttribute("selected",true);
                
                for (var i = 0; i < data.length; i++) {
                    var option = document.createElement("OPTION"),
                        txt = document.createTextNode(data[i].product_name);
                    option.appendChild(txt);
                    option.setAttribute("value", data[i].buyer_sku_code);
                    option.setAttribute("data-price", parseInt(data[i].price)+parseInt(data[i].komisi)+parseInt(data[i].resell));
                    option.setAttribute("data-desc", data[i].deskripsi);
                    selectProduk.insertBefore(option, selectProduk.lastChild);
                }
            }
        });        
    }
    
    getprovider();
    $("#tipeproduk").on("change",function(e){
        getprovider();
        $("#price").text('');
    });
    
    $("#provider").on("change",function(e){
        getvoucher();
    })
    
    $("#voucher").on("change",function(e){
        var price=parseInt($('option:selected', this).attr('data-price'));
        var deskripsi=$('option:selected', this).attr('data-desc');
        $("#price").text("Rp. "+price.toLocaleString('id'));
        $("#deskripsi").html('<p>'+deskripsi+'</p>');
    })
    
</script>