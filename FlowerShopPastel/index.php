<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bloomiee • Toko Bunga Pastel & Duka Cita Jakarta Selatan</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
  <style>
    :root{--pink:#F8C8DC;--hot:#ff6b9d;--cream:#FFF5E1;--light:#fff9fb;--dark:#444;}
    *{margin:0;padding:0;box-sizing:border-box;}
    body{font-family:'Poppins',sans-serif;background:var(--cream);color:var(--dark);line-height:1.7;}
    .container{max-width:1280px;margin:auto;padding:0 20px;}

    .topbar{background:var(--hot);color:white;text-align:center;padding:12px;font-weight:600;position:fixed;top:0;width:100%;z-index:9999;font-size:15px;}
    .topbar span{cursor:pointer;margin-left:20px;font-size:24px;}
    header{background:white;position:fixed;top:52px;width:100%;z-index:999;box-shadow:0 10px 30px rgba(248,200,220,0.4);padding:18px 0;}
    .nav{display:flex;justify-content:space-between;align-items:center;}
    .logo{font-family:'Playfair Display',serif;font-size:42px;color:var(--pink);}
    .menu a{margin:0 15px;color:var(--dark);text-decoration:none;font-weight:600;font-size:15px;}
    .menu a:hover{color:var(--hot);}
    .icons{display:flex;gap:28px;align-items:center;}
    .icon{position:relative;cursor:pointer;font-size:24px;color:var(--dark);}
    .icon:hover{color:var(--hot);}
    .badge{position:absolute;top:-10px;right:-12px;background:var(--hot);color:white;width:22px;height:22px;border-radius:50%;font-size:12px;font-weight:700;display:flex;align-items:center;justify-content:center;}

    .hero{height:100vh;background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=2070') center/cover;display:flex;align-items:center;justify-content:center;text-align:center;color:white;padding-top:100px;}
    .hero h1{font-family:'Playfair Display',serif;font-size:80px;margin-bottom:15px;}
    .hero p{font-size:24px;}
    .btn{background:white;color:var(--hot);padding:18px 55px;border-radius:50px;font-weight:700;text-decoration:none;display:inline-block;margin-top:25px;transition:0.3s;}
    .btn:hover{transform:translateY(-5px);}

    section{padding:100px 0;}
    h2{font-family:'Playfair Display',serif;font-size:52px;text-align:center;color:var(--hot);margin-bottom:70px;position:relative;}
    h2::after{content:'';width:120px;height:4px;background:var(--pink);display:block;margin:20px auto;border-radius:2px;}

    #gift{background:var(--light);}
    #duka{background:#f8f8f8;}
    #duka h2{color:#444;}
    #duka .price{color:#444;}
    #duka .add-cart{background:#444;}

    .products{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:40px;}
    .card{background:white;border-radius:28px;overflow:hidden;box-shadow:0 15px 40px rgba(0,0,0,0.1);transition:0.4s;}
    .card:hover{transform:translateY(-15px);}
    .card img{width:100%;height:340px;object-fit:cover;}
    .card-body{padding:28px;text-align:center;}
    .card h3{font-size:21px;margin:15px 0;}
    .price{font-size:26px;font-weight:700;margin:15px 0;color:var(--hot);}
    .add-cart{color:white;border:none;padding:16px 0;width:100%;border-radius:0 0 28px 28px;cursor:pointer;font-weight:600;font-size:16px;}
    .actions{margin:15px 0;display:flex;justify-content:center;gap:25px;}
    .actions i{font-size:24px;cursor:pointer;transition:0.3s;}
    .actions i:hover{color:var(--hot);}

    #about{background:white;}
    .about-content{max-width:900px;margin:auto;text-align:center;}
    .about-content p{font-size:18px;margin:25px 0;color:#555;}
    .trust{display:flex;justify-content:center;gap:60px;flex-wrap:wrap;margin-top:50px;}
    .trust div{text-align:center;}
    .trust i{font-size:40px;color:var(--hot);margin-bottom:15px;}

    #lokasi{background:#f8f8f8;}
    .maps iframe{width:100%;height:500px;border-radius:25px;border:0;box-shadow:0 15px 40px rgba(0,0,0,0.1);}

    .wa{position:fixed;bottom:25px;right:25px;width:65px;height:65px;background:#25D366;color:white;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:36px;box-shadow:0 10px 30px rgba(0,0,0,0.3);z-index:998;}

    .modal{display:none;position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.8);z-index:9999;align-items:center;justify-content:center;}
    .modal-content{background:white;max-width:550px;width:90%;border-radius:28px;padding:35px;position:relative;max-height:90vh;overflow-y:auto;}
    .close{font-size:38px;position:absolute;top:15px;right:25px;cursor:pointer;color:#aaa;}
  </style>
</head>
<body>

  <div class="topbar">GRATIS ONGKIR + DISKON 20% GRAND OPENING! <span onclick="this.parentElement.style.display='none'">×</span></div>

  <header>
    <div class="nav container">
      <div class="logo">Bloomiee</div>
      <div class="menu">
        <a href="#home">Beranda</a>
        <a href="#gift">Gift & Fresh</a>
        <a href="#duka">Duka Cita</a>
        <a href="#about">About</a>
        <a href="#lokasi">Lokasi</a>
        <a href="#booking">Booking</a>
      </div>
      <div class="icons">
        <div class="icon" onclick="openModal('wishlistModal')"><i class="far fa-heart"></i><span class="badge" id="wishCount">0</span></div>
        <div class="icon" onclick="openModal('cartModal')"><i class="fas fa-shopping-cart"></i><span class="badge" id="cartCount">0</span></div>
      </div>
    </div>
  </header>

  <section class="hero" id="home">
    <div>
      <h1>Bloomiee</h1>
      <p>Toko Bunga Pastel & Duka Cita Premium • Jakarta Selatan</p>
      <a href="https://wa.me/6282143232280" class="btn">Pesan Sekarang</a>
    </div>
  </section>

  <!-- GIFT & FRESH FLOWERS -->
  <section id="gift">
    <div class="container">
      <h2>Gift & Fresh Flowers</h2>
      <div class="products" id="giftProducts"></div>
    </div>
  </section>

  <!-- DUKA CITA -->
  <section id="duka">
    <div class="container">
      <h2>Duka Cita</h2>
      <div class="products" id="dukaProducts"></div>
    </div>
  </section>

  <!-- ABOUT -->
  <section id="about">
    <div class="container about-content">
      <h2>Tentang Bloomiee</h2>
      <p>Bloomiee adalah toko bunga premium di Jakarta Selatan yang berdiri sejak 2023. Kami spesialisasi bunga pastel aesthetic untuk moment bahagia dan bunga duka cita yang elegan & penuh hormat.</p>
      <p>Semua bunga import langsung dari Ecuador & Holland, dirangkai dengan cinta oleh florist berpengalaman. Same day delivery Jakarta, gratis kartu ucapan, garansi segar 7 hari.</p>
      <div class="trust">
        <div><i class="fas fa-truck"></i><br>Same Day Delivery</div>
        <div><i class="fas fa-leaf"></i><br>Bunga Import</div>
        <div><i class="fas fa-shield-alt"></i><br>Garansi 7 Hari</div>
        <div><i class="fas fa-star"></i><br>4.9/5 Rating</div>
      </div>
    </div>
  </section>

  <!-- LOKASI -->
  <section id="lokasi">
    <div class="container">
      <h2>Lokasi Toko Kami</h2>
      <p style="text-align:center;font-size:19px;margin-bottom:40px;color:#555;">
        Jl. Kemang Raya No. 25, Jakarta Selatan<br>
        Open Daily 08.00 - 21.00 WIB<br>
        <strong>WA: 0821-4323-2280</strong>
      </p>
      <div class="maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.074030665407!2d106.809!3d-6.255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f426f9f3b3e9%3A0x98b8b8b8b8b8b8b8!2sKemang%2C%20South%20Jakarta!5e0!3m2!1sid!2sid!4v1700000000000" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </section>

  <!-- BOOKING -->
  <section id="booking" style="background:var(--light);">
    <div class="container">
      <h2>Form Pemesanan</h2>
      <div style="background:white;padding:50px;border-radius:30px;box-shadow:0 20px 50px rgba(248,200,220,0.3);max-width:700px;margin:auto;">
        <div style="margin:25px 0;"><label>Nama Lengkap</label><input type="text" id="nama" style="width:100%;padding:16px;border:2px solid var(--pink);border-radius:15px;"></div>
        <div style="margin:25px 0;"><label>No. WhatsApp</label><input type="text" id="wa" placeholder="628xxxxxxxxxx" style="width:100%;padding:16px;border:2px solid var(--pink);border-radius:15px;"></div>
        <div style="margin:25px 0;"><label>Alamat Pengiriman</label><textarea id="alamat" rows="3" style="width:100%;padding:16px;border:2px solid var(--pink);border-radius:15px;"></textarea></div>
        <div style="margin:25px 0;"><label>Tanggal Kirim</label><input type="date" id="tanggal" style="width:100%;padding:16px;border:2px solid var(--pink);border-radius:15px;"></div>
        <div style="margin:25px 0;"><label>Catatan</label><textarea id="catatan" rows="3" style="width:100%;padding:16px;border:2px solid var(--pink);border-radius:15px;"></textarea></div>
        <button class="btn" style="width:100%;padding:20px;font-size:20px;" onclick="sendBooking()">Kirim Pesanan via WhatsApp</button>
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal" id="cartModal"><div class="modal-content"><span class="close" onclick="closeModal('cartModal')">×</span><h2 style="text-align:center;color:var(--hot);">Keranjang Belanja</h2><div id="cartItems"></div><div style="background:var(--light);padding:25px;border-radius:20px;text-align:center;font-size:26px;color:var(--hot);margin:25px 0;">Total: Rp <span id="cartTotal">0</span></div><button class="btn" style="width:100%;padding:18px;" onclick="checkout()">Checkout via WhatsApp</button></div></div>
  <div class="modal" id="wishlistModal"><div class="modal-content"><span class="close" onclick="closeModal('wishlistModal')">×</span><h2 style="text-align:center;color:var(--hot);">Favorit Saya</h2><div id="wishlistItems" style="text-align:center;padding:40px;color:#aaa;">Belum ada favorit</div></div></div>

  <a href="https://wa.me/6282143232280" class="wa"><i class="fab fa-whatsapp"></i></a>

  <script>
    const giftProducts = [
      {id:1,name:"Pink Paradise Bouquet",price:480000,img:"https://images.unsplash.com/photo-1561185483-b4457e4e5d13?q=80&w=800"},
      {id:2,name:"Money Bouquet Pink",price:1350000,img:"https://images.unsplash.com/photo-1604085572504-a392ddf0d86a?q=80&w=800"},
      {id:3,name:"Rose Box Valentine",price:890000,img:"https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=800"},
      {id:4,name:"Wisuda Bouquet Baby Blue",price:550000,img:"https://images.unsplash.com/photo-1584634726787-94f8c89ff4d0?q=80&w=800"},
      {id:5,name:"Gift Box + Cokelat",price:750000,img:"https://images.unsplash.com/photo-1607083206869-4c7672e72a8a?q=80&w=800"},
      {id:6,name:"Anniversary Sweet Pink",price:680000,img:"https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=800"}
    ];

    const dukaProducts = [
      {id:101,name:"Krans Duka Cita White Lily",price:1800000,img:"https://images.unsplash.com/photo-1587319377495-9e3c2bb6f2e8?q=80&w=800"},
      {id:102,name:"Bunga Papan Duka Cita",price:1500000,img:"https://images.unsplash.com/photo-1611840440188-793f9e5c3e2f?q=80&w=800"},
      {id:103,name:"Standing Flower Elegan",price:2200000,img:"https://images.unsplash.com/photo-1606819717116-9af7e0e3e9e7?q=80&w=800"},
      {id:104,name:"Krans Premium Black & White",price:2500000,img:"https://images.unsplash.com/photo-1594736797933-d0501ba2fe65?q=80&w=800"},
      {id:105,name:"Bunga Salib Putih",price:2800000,img:"https://images.unsplash.com/photo-1606819717116-9af7e0e3e9e7?q=80&w=800"}
    ];

    let cart = JSON.parse(localStorage.getItem('bloomiee_cart') || '[]');
    let wishlist = JSON.parse(localStorage.getItem('bloomiee_wish') || '[]');

    function render(container, arr){
      document.getElementById(container).innerHTML = arr.map(p=>`
        <div class="card">
          <img src="${p.img}" alt="${p.name}">
          <div class="card-body">
            <h3>${p.name}</h3>
            <div class="price">Rp ${p.price.toLocaleString('id-ID')}</div>
            <div class="actions">
              <i class="${wishlist.some(x=>x.id===p.id)?'fas':'far'} fa-heart" onclick="toggleWishlist(${p.id})"></i>
              <i class="fas fa-shopping-cart" onclick="addToCart(${p.id})"></i>
            </div>
            <button class="add-cart" onclick="addToCart(${p.id})">+ Keranjang</button>
          </div>
        </div>
      `).join('');
    }

    function addToCart(id){
      const all = [...giftProducts, ...dukaProducts];
      const item = all.find(p=>p.id===id);
      const existing = cart.find(x=>x.id===id);
      if(existing) existing.qty++; else cart.push({...item, qty:1});
      localStorage.setItem('bloomiee_cart', JSON.stringify(cart));
      updateCounter();
      alert("Ditambahkan ke keranjang!");
    }

    function toggleWishlist(id){
      const all = [...giftProducts, ...dukaProducts];
      const idx = wishlist.findIndex(x=>x.id===id);
      if(idx>-1) wishlist.splice(idx,1);
      else wishlist.push(all.find(p=>p.id===id));
      localStorage.setItem('bloomiee_wish', JSON.stringify(wishlist));
      updateCounter();
      render('giftProducts', giftProducts);
      render('dukaProducts', dukaProducts);
    }

    function updateCounter(){
      document.getElementById('cartCount').textContent = cart.reduce((a,c)=>a+c.qty,0)||0;
      document.getElementById('wishCount').textContent = wishlist.length;
    }

    function renderCart(){
      const el = document.getElementById('cartItems');
      if(cart.length===0){ el.innerHTML="<p style='text-align:center;padding:50px;color:#aaa;'>Keranjang kosong</p>"; return; }
      el.innerHTML = cart.map(c=>`
        <div style="display:flex;gap:20px;padding:20px 0;border-bottom:1px solid #eee;align-items:center;">
          <img src="${c.img}" style="width:90px;height:90px;object-fit:cover;border-radius:15px;">
          <div style="flex:1;"><strong>${c.name}</strong><br>Rp ${c.price.toLocaleString()} × ${c.qty}</div>
          <div style="display:flex;gap:10px;align-items:center;">
            <button style="width:36px;height:36px;border-radius:50%;background:var(--pink);border:none;cursor:pointer;" onclick="changeQty(${c.id},-1)">−</button>
            <span>${c.qty}</span>
            <button style="width:36px;height:36px;border-radius:50%;background:var(--pink);border:none;cursor:pointer;" onclick="changeQty(${c.id},1)">+</button>
          </div>
        </div>
      `).join('');
      document.getElementById('cartTotal').textContent = cart.reduce((a,c)=>a+c.price*c.qty,0).toLocaleString('id-ID');
    }

    function changeQty(id,delta){
      const i = cart.find(x=>x.id===id);
      i.qty += delta;
      if(i.qty<=0) cart = cart.filter(x=>x.id!==id);
      localStorage.setItem('bloomiee_cart', JSON.stringify(cart));
      updateCounter(); renderCart();
    }

    function checkout(){
      if(cart.length===0) return alert("Keranjang kosong!");
      let msg = "Halo Bloomiee! Saya mau pesan:%0A%0A";
      cart.forEach(c=>msg+=`• ${c.name} × ${c.qty} = Rp ${(c.price*c.qty).toLocaleString()}%0A`);
      msg+=`%0ATotal: Rp ${cart.reduce((a,c)=>a+c.price*c.qty,0).toLocaleString()}`;
      window.open('https://wa.me/6282143232280?text='+msg);
    }

    function sendBooking(){
      const n=document.getElementById('nama').value,w=document.getElementById('wa').value,
            a=document.getElementById('alamat').value,t=document.getElementById('tanggal').value,
            c=document.getElementById('catatan').value;
      if(!n||!w||!a||!t) return alert("Lengkapi data dulu ya!");
      let msg=`Halo Bloomiee!%0ASaya mau pesan:%0A%0ANama: ${n}%0AWA: ${w}%0AAlamat: ${a}%0ATanggal: ${t}%0A${c?`Catatan: ${c}%0A%0A`:''}`;
      if(cart.length>0){ msg+="Dari keranjang:%0A"; cart.forEach(x=>msg+=`• ${x.name} × ${x.qty}%0A`); msg+=`%0ATotal: Rp ${cart.reduce((a,c)=>a+c.price*c.qty,0).toLocaleString()}`;}
      window.open('https://wa.me/6282143232280?text='+msg);
    }

    function openModal(id){ document.getElementById(id).style.display='flex'; if(id==='cartModal') renderCart(); }
    function closeModal(id){ document.getElementById(id).style.display='none'; }

    // INIT
    render('giftProducts', giftProducts);
    render('dukaProducts', dukaProducts);
    updateCounter();
  </script>
</body>
</html>