$(document).ready(function(){
    $("#sendemail").click(function(){
        console.log("test");
        $("#alert").removeClass("d-none");
        window.scrollTo(0, 0)

        const nama = $("#inputnama").val();
        $("#alerttext").html("Terima Kasih " + nama + ", Link sudah dapat dilihat di email anda ")
        
    });


    $("#submitdata").click(function(){
        $("#getnama").removeClass("d-none");
        $("#shipform").addClass("d-none");

        const firstname = $("#firstname").val();
        const lastname = $("#lastname").val();
        const alamat = $("#alamat").val();

        $("#alerttext").html("Terima Kasih, " + firstname + " " + lastname); 
        $("#judul").html("Paket Akan Dikirim Ke " + alamat + " Secepatnya")
        
    });

    $("#gambar img").click(function(){
        // e.preventDefault();
        const imek = $(this).attr("src");

        $("#main").attr("src", imek);
        $("#main").css("width","500px");

    });

});