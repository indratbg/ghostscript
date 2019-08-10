# Protect PDF using Ghostscript

This code pupose to protect PDF file with owner password and user password using ghost script

For using ghostscript
Download https://www.ghostscript.com/download/gsdnld.html
Please select which suitable to your operating system

#Test Protect PDF

Download/clone this code and put in c:\xampp\htdocs\

I have been tested in Windown 10 64bit & Ubuntu Linux

Pada windows harus setting path

open system variable and add gs binary
dan tambahkan pada path C:\Program Files\gs\gs9.27\bin

Untuk installasi di linux gunakan peritah
sudo apt-get install ghostscript

Contoh penggunaaan di PHP 7
exec("/usr/bin/gs -sDEVICE=pdfwrite -dCompatibilityLevel=1.4 -sOwnerPassword=ownerpass -sUserPassword=userpass -o $destFile $sourceFile 2>&1");

Jika terdapat error libtiff.so.5
maka cek dengan menggunakan terminal

> > ldd /opt/lampp/lib/libtiff.so.5

# setelah itu restart lampp

> > /opt/lampp/lampp restart

#Jika belum bisa lakukan LD_PRELOAD pada libgs.so.9
caranya :

> > export LD_PRELOAD=path libgs.so.9

#cek apakah sudah masuk dengan caranya

> > ldd /bin/ls

Untuk Melihat error yang ditulis dengan STDOUT
gunakan "2>&1" setelah perintah exec("[command] 2>&1",\$output)
