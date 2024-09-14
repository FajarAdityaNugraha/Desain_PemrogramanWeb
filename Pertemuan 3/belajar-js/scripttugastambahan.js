let check = document.getElementById('check');
let button = document.getElementById('button');

button.addEventListener("click", function() {
    let nama = document.querySelector('#nama').value;
    let alamat = document.querySelector('#alamat').value;
    let tgl = document.querySelector('#tgl').value;

    if (check.checked) {
        // Periksa jika nama, alamat, atau tanggal lahir kosong
        if (nama === "" || alamat === "" || tgl === "") {
            alert("Isikan nama, alamat, dan tanggal lahir");
        } else {
            // Semua input sudah diisi, tidak ada tindakan yang diambil
            alert("Data sudah lengkap, Anda dapat mengirimkan formulir.");
        }
    } else {
        alert("Checklist 'cek jika anda akan mengirimkan data ini' terlebih dahulu");
    }
});
