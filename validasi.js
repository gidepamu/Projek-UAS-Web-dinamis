window.onload = function(){

    document.getElementById('submit').onclick = function(){
        var error = document.getElementsByTagName("h5");
        var nama = document.getElementById('nama');
        var kategori = document.getElementById('kategori');
        var harga = document.getElementById('harga');
        var tag = document.getElementById('tag');
        var keyword = document.getElementById('keyword');
        var foto = document.getElementById('foto');

        // nama
        if(nama.value.length == 0){
            error[0].innerHTML = "Nama tidak boleh kosong!";
        }else if(nama.value.length < 4 || nama.value.length > 50){
            error[0].innerHTML = "Judul harus antara 4 sampai 50 karakter";
        }else{
            error[0].innerHTML = "";
        }

        //kategori
        if(kategori.value.length == 0){
            error[1].innerHTML = "Kategori tidak boleh kosong!";
        }else if(kategori.value.length < 4 || kategori.value.length > 20){
            error[1].innerHTML = "Judul harus antara 4 sampai 20 karakter";
        }else{
            error[1].innerHTML = "";
        }

        //harga
        if(harga.value.match(/[a-z]/g)){
            error[2].innerHTML = "Harga harus bernilai angka";
        }else if(harga.value.length == 0){
            error[2].innerHTML = "Harga tidak boleh kosong!";
        }else{
            error[2].innerHTML = "";
        }

        //tag
        if(tag.value.match(/[?.,!]/g)){
            error[3].innerHTML = "tag harus memakai #";
        }else if(tag.value.length == 0){
            error[3].innerHTML = "tag tidak boleh kosong!";
        }else{
            error[3].innerHTML = "";
        }
        
        //keyword
        if(keyword.value.length == 0){
            error[4].innerHTML = "keyword tidak boleh kosong!";
        }else if(keyword.value.length < 4 || keyword.value.length > 20){
            error[4].innerHTML = "keyword  harus antara 4 sampai 20 karakter";
        }else{
            error[4].innerHTML = "";
        }

        // if(foto.value.length == 0){
        //     error[4].innerHTML = "foto tidak boleh kosong!";
        // }else{
        //     error[4].innerHTML = "";
        // }

        if(error[0].innerHTML!=""||error[1].innerHTML!=""||error[2].innerHTML!=""||error[3].innerHTML!=""||error[4].innerHTML!=""){
            event.preventDefault();
        }
    }
}