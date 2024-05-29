document.addEventListener("DOMContentLoaded", function() {
    // Memuat konten dari PHP
    fetch('generate_content.php?pesan=true')
        .then(response => response.text())
        .then(data => {
            document.getElementById('ccp').innerHTML = data;
        })
        .catch(error => console.error('Error fetching the content:', error));

    // Data Pesan
    const teksHai = "Hai, ada surat buat kamu nih";
    const konten = [
        { gambar: "sticker3.gif", ucapan: "Hai Sayang" },
        { gambar: "sticker1.gif", ucapan: "Aku sayang loh sama kamu" },
        { gambar: "sticker2.gif", ucapan: "Aku gak mau kamu pergi atau memilih orang lain" },
        { gambar: "sticker4.gif", ucapan: "Kalo aku punya salah minta maaf ya ayng" },
        { gambar: "sticker5.gif" },
    ];
    const musik = "musik.mp3";
    const nomorWhatsapp = "6288225715139";

    // Fungsi untuk menampilkan pesan
    function tampilkanPesan(konten) {
        const container = document.getElementById('ccp');
        konten.forEach(item => {
            const div = document.createElement('div');
            div.classList.add('cp');
            div.innerHTML = `
                <img src="${item.gambar}" alt="Sticker">
                <p>${item.ucapan || ''}</p>
            `;
            container.appendChild(div);
        });
    }

    // Memanggil fungsi untuk menampilkan pesan
    tampilkanPesan(konten);

    // Menjalankan DekaTutorial function
    DekaTutorial(konten, musik, nomorWhatsapp);
});
