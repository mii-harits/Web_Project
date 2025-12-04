<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>STEM Literacy | OER Commons</title>
<link rel="icon" type="image/png" href="https://oercommons.org/static/images/favicon.ico">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    margin:0; padding:0; height:100vh;
    background: url('https://images.unsplash.com/photo-1496104679561-38b8f2f77d8c?auto=format&fit=crop&w=1400&q=80') no-repeat center center fixed;
    background-size: cover;
    font-family: 'Inter', sans-serif;
}
body::before {
    content:'';
    position:fixed; top:0; left:0; right:0; bottom:0;
    backdrop-filter: blur(8px);
    background-color: rgba(0,0,0,0.3);
    z-index:-1;
}

.form-container {
    max-width: 700px;
    margin: 50px auto;
    background: rgba(0,0,0,0.6);
    backdrop-filter: blur(10px);
    padding: 40px;
    border-radius: 20px;
    border: 1px solid rgba(255,255,255,0.4);
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
    color: #fff;
}

.form-title {
    text-align: center;
    margin-bottom: 35px;
    font-size: 2rem;
    font-weight: bold;
    color: #fff;
}

/* Glass-input & floating label */
.glass-input {
    position: relative;
    margin-bottom: 25px;
}
.glass-input input,
.glass-input textarea {
    width: 100%;
    background: rgba(255,255,255,0.2);
    border: 1px solid rgba(255,255,255,0.5);
    border-radius: 12px;
    padding: 16px 15px 12px 15px;
    color: #fff;
    font-size: 1rem;
    backdrop-filter: blur(5px);
    transition: all 0.3s ease;
}

.glass-input input:focus,
.glass-input textarea:focus {
    border-color: #ffffff;
    box-shadow: 0 0 15px rgba(255,255,255,0.5);
    outline: none;
    background: rgba(255,255,255,0.25);
}

/* Label floating temporer */
.glass-input label {
    position: absolute;
    left: 12px;
    font-size: 1rem;
    font-weight: 600;
    color: #222;
    background: rgba(255,255,255,0.8);
    padding: 2px 6px;
    border-radius: 4px;
    pointer-events: none;
    top: 16px; /* default placeholder posisi */
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
}

/* Drag & Drop */
.drop-zone {
    position: relative;
    padding: 25px;
    border: 2px dashed rgba(255,255,255,0.6);
    border-radius: 12px;
    text-align: center;
    color: #fff;
    cursor: pointer;
    background: rgba(255,255,255,0.1);
    transition: all 0.3s ease;
    overflow: hidden;
}
.drop-zone.dragover { 
    background: rgba(255,255,255,0.2); 
    transform: scale(1.02);
    border-color: #00c3ff;
}
.drop-zone img {
    max-width: 100%;
    margin-top: 15px;
    border-radius: 12px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
    transition: all 0.3s ease;
}
.drop-zone span {
    display: block;
    font-size: 0.95rem;
    font-weight: 500;
    transition: all 0.3s ease;
}  

/* Button */
.btn-glass {
    width: 100%;
    padding: 12px;
    font-size: 1.1rem;
    font-weight: bold;
    border-radius: 15px;
    border: 1px solid rgba(255,255,255,0.5);
    background: rgba(255,255,255,0.25);
    color: #fff;
    backdrop-filter: blur(5px);
    transition: all 0.3s ease;
}
.btn-glass:hover {
    background: rgba(255,255,255,0.4);
    box-shadow: 0 0 15px rgba(255,255,255,0.6);
    transform: translateY(-2px);
}
.btn-glass:active {
    transform: translateY(0);
    box-shadow: 0 0 10px rgba(255,255,255,0.3);
}
.btn-glass-red {
    width: 30%;
    padding: 12px;
    font-size: 1.1rem;
    font-weight: bold;
    border-radius: 15px;
    border: 1px solid rgba(255, 0, 0, 0.8);
    background: rgba(255, 0, 0, 0.3);
    color: #fff;
    backdrop-filter: blur(5px);
    transition: all 0.3s ease;
    text-align: center;
    text-decoration: none;
}

.btn-glass-red:hover {
    background: rgba(255, 50, 50, 0.4);
    box-shadow: 0 0 15px rgba(255, 80, 80, 0.7);
    transform: translateY(-2px);
}

.btn-glass-red:active {
    transform: translateY(0);
    box-shadow: 0 0 10px rgba(255, 80, 80, 0.4);
}
</style>
</head>
<body>
<div class="form-container">
    <h2 class="form-title">Edit Buku</h2>
    <form id="bookForm" action="{{ route('resources.update', $resource->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Judul -->
        <div class="glass-input">
            <input type="text" id="title" name="title" value="{{ $resource->title }}"  required placeholder="Judul" />
            <label for="title">Judul</label>
        </div>

        <!-- Kategori STEM -->
        <div class="glass-input">
            <input type="text" id="category_stem" name="category_stem" value="{{ $resource->category_stem }}" required placeholder="Kategori STEM" />
            <label for="category_stem">Kategori STEM</label>
        </div>

        <!-- Kategori Resource -->
        <div class="glass-input">
            <input type="text" id="category_resource" name="category_resource" value="{{ $resource->category_resource }}" required placeholder="Kategori Resource" />
            <label for="category_resource">Kategori Resource</label>
        </div>
        
        <!-- Link -->
        <div class="glass-input">
            <input type="url" id="link" name="link" value="{{ $resource->link }}" placeholder="Link" />
            <label for="link">Link</label>
        </div>
        
        <!-- Deskripsi -->
        <div class="glass-input">
            <textarea id="description" name="description" rows="4" placeholder="Deskripsi">{{ $resource->description }}</textarea>
            <label for="description">Deskripsi</label>
        </div>


        <!-- Upload Image -->
        <div class="glass-input">
            <label>Upload Gambar</label>
            <div class="drop-zone" id="drop-zone">
                <span id="file-text" style="{{ $resource->image ? '' : '' }}">
                    Upload Gambar Baru (Optional)
                </span>
                
                <input type="file" id="image" name="image" accept="image/*" style="display:none;">
                
                <span id="file-label" style="color:#fff;">
                    {{ $resource->image ?? 'Pilih File' }}
                </span>
            
                <!-- PREVIEW DEFAULT: jika ada gambar lama, tampilkan -->
                <img id="preview"
                     src="{{ $resource->image ? asset('storage/resources/' . $resource->image) : '' }}"
                     alt="Preview"
                     style="display: {{ $resource->image ? 'block' : 'none' }}; margin-top:10px; border-radius:12px;">
                
                <small style="display:block; margin-top:5px; color: rgba(255,255,255,0.7); font-size: 0.85rem;">
                    Max Size: 10 MB
                </small>
            </div>

            <!-- Error Laravel -->
            @error('image')
                <div class="text-danger" style="margin-top:10px; font-weight:600;">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="d-flex justify-content-end mt-3">
            <a href="{{ route('stem') }}" class="btn-glass-red me-2">
                Cancel
            </a>
            <button type="submit" class="btn-glass">Update Buku</button>
        </div>
    </form>
</div>

<script>
// Floating label temporer + Enter blur + naik lebih tinggi
document.querySelectorAll('.glass-input input, .glass-input textarea').forEach(input => {
    const label = input.nextElementSibling;

    input.addEventListener('focus', () => {
        label.style.opacity = '1';
        label.style.visibility = 'visible';
        label.style.top = '-12px'; // naik lebih tinggi
    });

    input.addEventListener('blur', () => {
        label.style.opacity = '0';
        label.style.visibility = 'hidden';
    });

    input.addEventListener('keydown', e => {
        if(e.key === 'Enter'){
            e.preventDefault();
            input.blur(); // hilangkan label saat Enter
            // fokus ke field berikutnya
            const formFields = Array.from(document.querySelectorAll('.glass-input input, .glass-input textarea'));
            const idx = formFields.indexOf(input);
            if(idx < formFields.length - 1) formFields[idx+1].focus();
        }
    });
});

const dropZone = document.getElementById('drop-zone');
const inputFile = dropZone.querySelector('input');
const preview = document.getElementById('preview');
const fileText = document.getElementById('file-text');

// Klik drop-zone
dropZone.addEventListener('click', (e) => {
    // Jika klik input, jangan trigger click lagi
    if (e.target !== inputFile) {
        inputFile.click();
    }
});

// Input change
inputFile.addEventListener('change', () => {
    if(inputFile.files && inputFile.files[0]){

        const file = inputFile.files[0];

        // VALIDASI SIZE : 10 MB (10 * 1024 * 1024)
        if (file.size > 10 * 1024 * 1024) {
            alert("Ukuran file melebihi 10 MB. Upload dibatalkan!");
            inputFile.value = "";  // reset input
            fileText.style.display = 'block';
            preview.style.display = 'none';
            return;
        }

        fileText.style.display = '';
        preview.style.display = 'block';

        const reader = new FileReader();
        reader.onload = e => preview.src = e.target.result;
        reader.readAsDataURL(file);

    } else {
        fileText.style.display = 'block';
        preview.style.display = 'none';
    }
});

// Drag & drop
dropZone.addEventListener('dragover', e => { 
    e.preventDefault(); 
    dropZone.classList.add('dragover'); 
});
dropZone.addEventListener('dragleave', () => dropZone.classList.remove('dragover'));

dropZone.addEventListener('drop', e => {
    e.preventDefault(); 
    dropZone.classList.remove('dragover');

    if (e.dataTransfer.files && e.dataTransfer.files[0]) {

        // ✅ FIX: Gunakan DataTransfer agar file bisa masuk ke input
        const dt = new DataTransfer();
        dt.items.add(e.dataTransfer.files[0]);
        inputFile.files = dt.files;

        // Trigger change handler
        inputFile.dispatchEvent(new Event('change'));
    }
});

document.getElementById('image').addEventListener('change', function () {

    const fileText = document.getElementById('file-text');
    const fileLabel = document.getElementById('file-label');
    const preview = document.getElementById('preview');

    // Jika user memilih file baru
    if (this.files[0]) {
        let fileName = this.files[0].name;

        // Sembunyikan teks "Upload Gambar Baru"
        fileText.style.display = 'none';

        // Update label nama file
        fileLabel.innerText = fileName;

        // Preview baru
        let reader = new FileReader();
        reader.onload = function (e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        }
        reader.readAsDataURL(this.files[0]);
    }
});

</script>
</body>
</html>
