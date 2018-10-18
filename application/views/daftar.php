<?php $this->load->view('component/header'); ?>

<div id="content-wrapper">

        <div class="container-fluid">
          <!-- DataTables Example -->
          <div class="card mb-3">
            <center>
            <div class="card-header">
              
              <i class="fas fa-table"></i>
              DAFTAR PRINT LAB TA JARKOM
            </div>
            </center>

     <div class="card-body">
  <form method="post" action="result"> 
    <table>
    <tr>
      <td>Nama</td>
      <td width='90%'>
        <input type="text" name="nama" value="" size="50" required></td>
    </tr>
    <tr>
      <td>NIM</td>
      <td>
        <input type="text" name="nim" value="" size="50" maxlength="9" minlength="9"></td>
    </tr>
  <tr><td width='auto' >Paper B/W</td>
  <td>
  <input type="number" name="jbw" min="0" value="">
  Paper Color
  <input type="number" name="jcolor" min="0" value=""></td>
  </td>
   </tr>
  </tr>
  
  <tr><td width='auto' >Kertas Siapa</td>
  <td>
  <input type="radio" name="kertas" value="kSendiri" required> Kertas Sendiri
  <input type="radio" name="kertas" value="kLab"  required>Kertas Lab Jarkom<br>
  </td>
   </tr>
   <tr>
        <td> </td>
        <td>
        <button class="button button5" type="submit">CETAK</button>
        </td></tr>

  </table>
</form>
    </div>
</div>
</div>
        </div>


 <?php $this->load->view('component/footer'); ?> 
