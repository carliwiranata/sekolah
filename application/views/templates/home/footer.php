 <!-- footer -->
 <footer id="kontak">
     <div class="container">
         <div class="row">
             <div class="col-md-4">
                 <div class="footer-col">
                     <div class="brand-2">
                         <img src="<?= base_url('assets/img/identitas/' . $identitas['logo']) ?>" alt="">
                         <h1><?= $identitas['nama_sekolah'] ?></h1>
                     </div>
                 </div>
                 <p>
                     <?= $identitas['penutup'] ?>
                 </p>
                 <ul>
                     <li><a target="_blank" href="<?= $identitas['link_fb'] ?>"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a target="_blank" href="<?= $identitas['link_ig'] ?>"><i class="fab fa-instagram"></i></a></li>
                     <li><a target="_blank" href="<?= $identitas['link_yt'] ?>"><i class="fab fa-youtube"></i></a></li>
                 </ul>
             </div>
             <div class="col-md">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15930.334021979315!2d98.905979!3d3.450964!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x303141491cc39f57%3A0xc3bfa27d2aa7d916!2sSMK%20NEGERI%201%20GALANG!5e0!3m2!1sid!2sid!4v1709780102671!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
             </div>
         </div>
     </div>

 </footer>

 <script src="<?= base_url('assets/home/') ?>js/jquery-3.3.1.slim.min.js"></script>
 <script src="<?= base_url('assets/home/') ?>js/bootstrap.min.js"></script>
 <script src="<?= base_url('assets/home/') ?>js/owl.carousel.min.js"></script>
 <script src="<?= base_url('assets/home/') ?>js/main.js"></script>
 <!-- data table -->
 <script src="<?= base_url('assets/') ?>modules/datatables/datatables.min.js"></script>
 <script src="<?= base_url('assets/') ?>modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
 <script src="<?= base_url('assets/') ?>modules/datatables/Select-1.2.4/js/dataTables.select.min.js"></script>
 <script src="<?= base_url('assets/') ?>js/page/modules-datatables.js"></script>

 </body>

 </html>