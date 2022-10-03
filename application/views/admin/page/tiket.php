<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-ticket</title>
  <style>*,
    *::after {
      box-sizing: border-box;
      margin: 0;
    }
    
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      color: #454f54;
      background-color: #f4f5f6;
      background-image: linear-gradient(to bottom left, #abb5ba, #d5dadd);
    }
    
    .ticket {
      display: grid;
      grid-template-rows: auto 1fr auto;
      max-width: 24rem;
    }
    .ticket__header, .ticket__body, .ticket__footer {
      padding: 1.25rem;
      background-color: white;
      border: 1px solid #abb5ba;
      box-shadow: 0 2px 4px rgba(41, 54, 61, 0.25);
    }
    .ticket__header {
      font-size: 1.5rem;
      border-top: 0.25rem solid #dc143c;
      border-bottom: none;
      box-shadow: none;
    }
    .ticket__wrapper {
      box-shadow: 0 2px 4px rgba(41, 54, 61, 0.25);
      border-radius: 0.375em 0.375em 0 0;
      overflow: hidden;
    }
    .ticket__divider {
      position: relative;
      height: 1rem;
      background-color: white;
      margin-left: 0.5rem;
      margin-right: 0.5rem;
    }
    .ticket__divider::after {
      content: '';
      position: absolute;
      height: 50%;
      width: 100%;
      top: 0;
      border-bottom: 2px dashed #e9ebed;
    }
    .ticket__notch {
      position: absolute;
      left: -0.5rem;
      width: 1rem;
      height: 1rem;
      overflow: hidden;
    }
    .ticket__notch::after {
      content: '';
      position: relative;
      display: block;
      width: 2rem;
      height: 2rem;
      right: 100%;
      top: -50%;
      border: 0.5rem solid white;
      border-radius: 50%;
      box-shadow: inset 0 2px 4px rgba(41, 54, 61, 0.25);
    }
    .ticket__notch--right {
      left: auto;
      right: -0.5rem;
    }
    .ticket__notch--right::after {
      right: 0;
    }
    .ticket__body {
      border-bottom: none;
      border-top: none;
    }
    .ticket__body > * + * {
      margin-top: 1.5rem;
      padding-top: 1.5rem;
      border-top: 1px solid #e9ebed;
    }
    .ticket__section > * + * {
      margin-top: 0.25rem;
    }
    .ticket__section > h3 {
      font-size: 1.125rem;
      margin-bottom: 0.5rem;
    }
    .ticket__header, .ticket__footer {
      font-weight: bold;
      font-size: 1.25rem;
      display: flex;
      justify-content: center;
    }
    .ticket__footer {
      border-top: 2px dashed #e9ebed;
      border-radius: 0 0 0.325rem 0.325rem;
    }
    </style>

</head>
<body>
  <article class="ticket" id='tiket'>
    <header class="ticket__wrapper">
      <div class="ticket__header">
      <img src="<?php echo base_url('theme/') ?>assets/img/logo/logo_dn19.png" height="60" alt="dn19">
      </div>
    </header>
    <div class="ticket__divider">
      <div class="ticket__notch"></div>
      <div class="ticket__notch ticket__notch--right"></div>
    </div>
    <div class="ticket__body">
      <section class="ticket__section">
        <h3>Atas Nama</h3>
        <p><?= $slug['nama'] ?></p>
      </section>
      <section class="ticket__section">
        <h3>Kompetisi</h3>
        <p><?= $setting['kompetisi'] ?></p>
      </section>
      <section class="ticket__section">
        <h3>Jadwal Kompetisi</h3>
        <p><?= date('d F Y', strtotime($setting['jadwal'])) ?></p>
      </section>
    </div>
    <footer class="ticket__footer" style="padding: 20px 5px !important;">
      <span><img width="300" height="80" id="barcode"></img></span>
    </footer>
  </article>
  <script src="https://unpkg.com/jsbarcode@latest/dist/JsBarcode.all.min.js"></script>
  <script>
    var element = document.getElementById("barcode");
    JsBarcode(element, "<?= $slug['slug'] ?>");
  </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   
   <script>
    var element = document.getElementById('tiket');
    var opt = {
    margin:       0.1,
    filename:     'Tiket-DN19.pdf',
    image:        { type: 'jpeg', quality: 9 },
    html2canvas:  { scale: 4 },
    jsPDF:        { unit: 'in', format: 'A6' }
    };
    html2pdf().set(opt).from(element).save();
    </script>
</body>
</html>