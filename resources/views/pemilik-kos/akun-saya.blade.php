@extends('layouts.pemilik-kos')

@section('content')
<main class="main-container">
  <div class="row">
    <div class="col-2">
      <div class="card">
        <h3>Informasi Akun Saya</h3>
        <form style="display: flex; flex-direction: column; gap: 1rem">
          <div class="input-group">
            <label for="">Nama </label>
            <input
              type="text"
              class="input-text"
              placeholder="Masukkan Nama"
            />
          </div>

          <div class="input-group">
            <label for="">Nomor Telepon </label>
            <input
              type="email"
              class="input-text"
              placeholder="Masukkan Nomor Telepon"
            />
          </div>

          <div class="input-group">
            <label for="">Email </label>
            <input
              type="email"
              class="input-text"
              placeholder="Masukkan Email"
            />
          </div>

          <div class="input-group">
            <label for="">Password</label>
            <div style="position: relative">
              <input
                type="email"
                class="input-text"
                placeholder="Masukkan Password"
              />
              <ion-icon
                name="eye"
                style="
                  cursor: pointer;
                  font-size: 1.2rem;
                  position: absolute;
                  right: 1rem;
                  height: 100%;
                  color: #00000068;
                "
              ></ion-icon>
            </div>
          </div>

          <div class="input-group">
            <label for="">Konfirmasi Password</label>
            <div style="position: relative">
              <input
                type="email"
                class="input-text"
                placeholder="Masukkan Konfirmasi Password"
              />
              <ion-icon
                name="eye"
                style="
                  cursor: pointer;
                  font-size: 1.2rem;
                  position: absolute;
                  right: 1rem;
                  height: 100%;
                  color: #00000068;
                "
              ></ion-icon>
            </div>
          </div>

          <div class="input-group" style="margin-top: 1rem">
            <a href="http://" class="button-filed"
              >Perbarui Informasi Profile</a
            >
          </div>
        </form>
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