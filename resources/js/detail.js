document.addEventListener('DOMContentLoaded', () => {
  const modal = document.getElementById('imageModal'); // Mengambil elemen modal
  const modalImage = document.getElementById('modalImage'); // Gambar di modal
  const closeBtn = document.querySelector('.modal .close'); // Tombol close (X)
  const prevBtn = document.querySelector('.modal .prev'); // Tombol prev
  const nextBtn = document.querySelector('.modal .next'); // Tombol next
  
  // Kumpulan gambar thumbnail
  let images = document.querySelectorAll('.thumbnail');
  let currentIndex = 0;

  // Fungsi untuk membuka modal dengan gambar tertentu
  function openModal(index) {
    currentIndex = index; // Atur index gambar yang akan ditampilkan
    modalImage.src = images[currentIndex].src; // Ganti gambar di modal
    modal.style.display = 'block'; // Tampilkan modal
    document.body.classList.add('modal-open'); // Nonaktifkan scroll di body
  }

  // Event listener untuk thumbnail
  images.forEach((item, index) => {
    item.addEventListener('click', () => {
      openModal(index); // Buka modal dengan gambar yang diklik
    });
  });

  // Event listener untuk tombol close (X)
  closeBtn.addEventListener('click', () => {
    modal.style.display = 'none'; // Sembunyikan modal
    document.body.classList.remove('modal-open'); // Aktifkan kembali scroll di body
  });

  // Event listener untuk tombol next
  nextBtn.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % images.length; // Pindah ke gambar berikutnya
    modalImage.src = images[currentIndex].src; // Ganti gambar di modal
  });

  // Event listener untuk tombol prev
  prevBtn.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + images.length) % images.length; // Pindah ke gambar sebelumnya
    modalImage.src = images[currentIndex].src; // Ganti gambar di modal
  });

  // Event listener untuk menutup modal jika klik di luar modal
  window.addEventListener('click', (event) => {
    if (event.target === modal) {
      modal.style.display = 'none'; // Sembunyikan modal
      document.body.classList.remove('modal-open'); // Aktifkan kembali scroll di body
    }
  });
});
