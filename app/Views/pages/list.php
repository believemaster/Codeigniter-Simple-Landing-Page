<h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">Welcome To</span>
      <span class="site-heading-lower">Believe Master</span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Believe Master</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="/">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="/about">About</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="/works">Works</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="/contact-us">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Welcome</span>
                <span class="section-heading-lower">Believe Master</span>
              </h2>

              <?= \Config\Services::validation()->listErrors(); ?>

              <!-- List of contacts -->
              <table class="table">
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Message</th>
                  </tr>
                </thead>
                <?php if (! empty($contact) && is_array($contact)) : ?>
                  <?php foreach ($contact as $item): ?>
                  <tr>
                    <td><?= $item['id'] ?></td>
                    <td><?= $item['name'] ?></td>
                    <td><?= $item['email'] ?></td>
                    <td><?= $item['phone'] ?></td>
                    <td><?= $item['message'] ?></td>
                  </tr>
                  <?php endforeach; ?>
                <?php else : ?>
                  <h3>No Contacts</h3>
                  <p>Empty Record</p>
                <?php endif ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>