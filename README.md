# OPOS
Odoo pos with PHP.

Use the software at your own risk.

Is you need detailed technical information or training, please contact the author directly.

# INSTALLATION MANUAL

Detailed installation manual is avaiable under the Doc folder.

# A. Instalasi OPOS

1. copy opos-x.x.tgz ke folder "htdocs" or /var/www

2. extract it
   tar xfzp opos-x.x.tgz
   pastikan folder ini sudah full access (chmod 777):
   assets
   protected/runtime
   installer

3. Jalankan installer dengan membuka alamat:

   http://localhost/opos

4. masukkan nama db, user, password, dan email

5. klik tombol proses installasi



# B. Instalasi Modul Addons OPOS di Odoo


1. copy file addons/vit_opos.zip dan addons/vit_sync_master ke flder addons OpenERP

2. masuk ke Settings - Update module list

3. masuk ke Settings - Installed Module - cari vit_opos,vit_barcode_product, dan vit_sync_master

4. klik install


