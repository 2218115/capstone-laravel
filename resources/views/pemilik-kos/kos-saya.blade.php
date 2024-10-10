@extends('layouts.pemilik-kos')

@section('content')
<main class="main-container">
  <div class="row">
    <div class="col-1">
      <div class="card">
        <a href="{{ url('pemilik-kos/kos-saya/tambah-data-kos') }}" class="button-filed"
          >Tambah Data Kos
          <ion-icon
            name="add"
            style="font-size: 1.4rem; font-weight: bold; color: #fff"
          ></ion-icon
        ></a>

        <div
          style="
            height: 100%;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            border: 1px solid #d2d2d2;
            border-radius: 12px;
            align-items: stretch;
          "
        >
          <div
            style="
              display: flex;
              flex-direction: column;
              justify-content: space-between;
            "
          >
            <div style="display: flex; flex-direction: column; gap: 1rem">
              <h4>Kos Campur Paling Nyaman Joss</h4>
              <p
                style="
                  margin-top: 0.5rem;
                  font-size: 14px;
                  color: #575757;
                "
              >
                Kos Campur deket kampus Politeknik Negeri Malang, paling
                murah se Malang
              </p>

              <div style="display: flex; gap: 1rem">
                <div
                  style="
                    padding: 0.4rem;
                    border: 1px solid #ebebeb;
                    width: fit-content;
                    border-radius: 4px;
                  "
                >
                  <p style="font-size: 12px; color: #3e3e3e">
                    Tersedia 5 Kamar
                  </p>
                </div>

                <div
                  style="
                    padding: 0.4rem;
                    border: 1px solid #ebebeb;
                    width: fit-content;
                    border-radius: 4px;
                  "
                >
                  <p style="font-size: 12px; color: #3e3e3e">
                    Kos Campur
                  </p>
                </div>
              </div>

              <div style="display: flex; gap: 1rem; align-items: center">
                <ion-icon
                  name="checkmark-done"
                  style="font-size: 1.2rem; color: rgb(30, 183, 30)"
                ></ion-icon>
                <p>Terverifikasi</p>
              </div>
            </div>
            <a
              href="http://"
              class="button-filed"
              style="padding: 0.8rem; width: fit-content"
              >Perbarui Data Kos</a
            >
          </div>

          <div>
            <img
              src="https://images.unsplash.com/photo-1680265669031-d50ed4391855?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
              alt="gambar kos"
              srcset=""
              style="
                width: 18rem;
                height: 14rem;
                border-radius: 8px;
                background-size: cover;
              "
            />
          </div>
        </div>
      </div>
    </div>

    <div class="col-2">
      <div class="card">
        <h3>Pengaturan Notifikasi</h3>

        <!-- refactor input checkbox -->
        <form
          action=""
          style="display: flex; flex-direction: column; gap: 1rem"
        >
          <div class="input-group">
            <div
              style="
                display: flex;
                gap: 1rem;
                align-items: center;
                cursor: pointer;
              "
            >
              <ion-icon
                name="checkbox"
                style="font-size: 1.8rem; color: #4475f2"
              ></ion-icon>
              <label for="" style="cursor: pointer"
                >Rekomendasi Via Email</label
              >
            </div>
          </div>

          <div class="input-group">
            <div
              style="
                display: flex;
                gap: 1rem;
                align-items: center;
                cursor: pointer;
              "
            >
              <ion-icon
                name="checkbox"
                style="font-size: 1.8rem; color: #4475f2"
              ></ion-icon>
              <label for="" style="cursor: pointer"
                >Notifikasi Via Chat</label
              >
            </div>
          </div>

          <div class="input-group">
            <div
              style="
                display: flex;
                gap: 1rem;
                align-items: center;
                cursor: pointer;
              "
            >
              <ion-icon
                name="checkbox"
                style="font-size: 1.8rem; color: #4475f2"
              ></ion-icon>
              <label for="" style="cursor: pointer"
                >Rekomendasi Via SMS</label
              >
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
@endsection