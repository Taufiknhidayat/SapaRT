function validasi() {
    let nama = document.getElementById("nama").value;
    // querySelector untuk mencari input dengan name="email"
    let email = document.querySelector("input[name='email']").value; 
    let isi = document.getElementById("isi").value;

    // Cek apakah ada yang kosong
    if (nama == "" || email == "" || isi == "") {
        alert("Mohon lengkapi semua data (Nama, Email, dan Isi Aduan)!");
        return false; 
    }
    
    return true;
}