@extends('layouts.pemilik-kos')

@section('content')
<main class="main-container">
    <div class="row">
        <div class="col-1">
        <div class="card">
            <h3>Informasi Kos</h3>
            <form style="display: flex; flex-direction: column; gap: 1rem">
            <div class="input-group">
                <label for="">Nama Kos</label>
                <input
                type="text"
                class="input-text"
                placeholder="Masukkan Nama Kos"
                />
            </div>

            <div class="input-group">
                <label for="">Deskripsi Kos</label>
                <input
                type="email"
                class="input-text"
                placeholder="Masukkan Deskripsi Kos"
                />
            </div>

            <div class="input-group">
                <label for="">Disewakan Untuk </label>
                <div class="radio-button-container">
                <label for="laki" class="radio-button">
                    Laki - Laki
                    <input
                    type="radio"
                    name="category"
                    id="laki"
                    value="laki"
                    />
                </label>

                <label for="perempuan" class="radio-button">
                    Perempuan
                    <input
                    type="radio"
                    name="category"
                    id="perempuan"
                    value="perempuan"
                    />
                </label>

                <label for="campur" class="radio-button">
                    Campur
                    <input
                    type="radio"
                    name="category"
                    id="campur"
                    value="campur"
                    />
                </label>
                </div>
            </div>

            <div class="input-group">
                <label for="">Deskripsi Peraturan Kos</label>
                <textarea
                class="input-text"
                name=""
                id=""
                cols="30"
                rows="10"
                ></textarea>
            </div>

            <div class="input-group">
                <label for="">Ketersediaan Kamar</label>
                <input
                type="text"
                class="input-text"
                placeholder="Masukkan Ketersediaan Kamar"
                />
            </div>

            <div class="input-group">
                <label for="">Harga Kamar</label>
                <input
                type="text"
                class="input-text"
                placeholder="Masukkan Harga Kamar"
                />
            </div>

            <div class="input-group">
                <label for="">Provinsi</label>
                <select class="input-text">
                <option>Jawa Timur</option>
                <option>Jawa Tengah</option>
                <option>Jawa Barat</option>
                </select>
            </div>

            <div class="input-group">
                <label for="">Kabupaten/Kota</label>
                <select class="input-text">
                <option>Blitar</option>
                <option>Malang</option>
                </select>
            </div>

            <div class="input-group">
                <label for="">Kecamatan</label>
                <select class="input-text">
                <option>Ponggok</option>
                <option>Klojen</option>
                </select>
            </div>

            <div class="input-group">
                <label for="">Detail Alamat Kos</label>
                <input
                type="text"
                class="input-text"
                placeholder="Masukkan Detail Alamat Kos"
                />
            </div>
            </form>
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-1">
        <div class="card">
            <h3>Foto Kos</h3>
            <div
            style="display: flex; justify-content: flex-start; gap: 2rem"
            >
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

            <div
                style="
                border-radius: 12px;
                display: flex;
                justify-content: center;
                align-items: center;
                border: 1px solid rgba(0, 0, 0, 0.108);
                width: 18rem;
                height: 14rem;
                border-radius: 8px;
                cursor: pointer;
                "
            >
                <p>Tambah Foto</p>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-1">
        <div class="card">
            <h3>Foto Kamar</h3>
            <div
            style="display: flex; justify-content: flex-start; gap: 2rem"
            >
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

            <div
                style="
                border-radius: 12px;
                display: flex;
                justify-content: center;
                align-items: center;
                border: 1px solid rgba(0, 0, 0, 0.108);
                width: 18rem;
                height: 14rem;
                border-radius: 8px;
                cursor: pointer;
                "
            >
                <p>Tambah Foto</p>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-1">
        <div class="card">
            <h3>Foto Fasilitas</h3>
            <div
            style="display: flex; justify-content: flex-start; gap: 2rem"
            >
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
            <div
                style="
                border-radius: 12px;
                display: flex;
                justify-content: center;
                align-items: center;
                border: 1px solid rgba(0, 0, 0, 0.108);
                width: 18rem;
                height: 14rem;
                border-radius: 8px;
                cursor: pointer;
                "
            >
                <p>Tambah Foto</p>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div class="row">
        <div class="col-1">
        <a
            href="{{ url('pemilik-kos/kos-saya') }}"
            class="button-filed"
            style="padding: 0.8rem; width: 100%"
            >Ajukan Data Kos</a
        >
        </div>
    </div>

    <div style="height: 2rem; width: 100%">-</div>
    </main>
@endsection