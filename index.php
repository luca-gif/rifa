<?php
include 'head.html';
?>

<body>
  <main class="container">

    <section class="square bg-success">

      <!-- qui disegno i numeri -->

    </section>

    <div class="form d-none">
      <div class="form-bg">
        <i class="fa-regular fa-circle-xmark close-modal"></i>

        <form action="php/send-form.php" method="POST">
          <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Come ti chiami?">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Inserisci la tua email">
          </div>

          <input type="hidden" id="userNumber" name="number">

          <button type="submit" id="save" name="save" class="btn btn-primary mt-3">Procedi al pagamento</button>
        </form>

      </div>
    </div>

    <!-- PAYMENT BUTTONS -->
    <div class="pay d-none">


    </div>


    <!-- Modal -->
    <div class="modal fade" id="buy-number-modal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
          </div>
          <div class="modal-body">
            Vuoi acquistare questo numero?
          </div>
          <div class="modal-footer">
            <button type="button" id="send" class="btn btn-secondary">Si</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
          </div>
        </div>
      </div>
    </div>

  </main>
  <script src="script.js"></script>
</body>