import MySQLdb
import time
import datetime
from datetime import datetime
import random

database = MySQLdb.connect("localhost", "root", "", "db_suhulembab")
cursor = database.cursor()

sql2 = cursor.execute("select count(*) from tb_set_poin")
data = cursor.fetchone()

jml = data[0]
w = 1

# Jenis ruangan
print("=====Jenis ruangan======")
while w < jml+1:
    z = str(w)
    sql = cursor.execute(
        "select nama_ruangan from tb_set_poin where id_ruangan ='"+z+"'")
    ruangan = cursor.fetchone()
    t = str(ruangan[0])
    print(w, t)
    w += 1
nm_ruangan = str(input("Masukkan Nama ruangan : "))

# Pilih Sensor
print("=======Sensor======")
print("1.kelembaban ruangan")
print("2.suhu ruangan")

sensor = int(input("Sensor Yang Dipilih :"))

lama_pengecekan = input("Jangka Waktu : ")
jumlah_pengecekan = input("Jumlah Pengecekan : ")

a = cursor.execute(
    "select * from tb_set_poin where nama_ruangan like '%"+nm_ruangan+"%'")
b = nm_ruangan
id_ruangan = str(b)[0]

c = cursor.execute(
    "select nama_ruangan from tb_set_poin where id_ruangan like "+nm_ruangan+"")
d = cursor.fetchone()
namaa_ruangan = str(d[0])


# sensor kelembaban
if sensor == 1:
    pilih_tabel = 'tb_kelembaban'
    nilai = 0
    # jps(jumlah pengecekan sensor)
    jps = int(jumlah_pengecekan)
    # wps(waktu pengecekan sensor)
    wps = int(lama_pengecekan)
    nilai_max = jps
    while nilai < nilai_max:
        kelembaban = str(random.randint(0, 14))
        t_end = time.time() + 60 * wps
        v = 0
        tbl_kelembaban = []

        while time.time() < t_end:
            print("░░░░░░░░░░░▄▀▄▀▀▀▀▄▀▄░░░░░░░░░░░░░░░░░░")
            print("░░░░░░░░░░░█░░░░░░░░▀▄░░░░░░▄░░░░░░░░░░")
            print("░░░░░░░░░░█░░▀░░▀░░░░░▀▄▄░░█░█░░░░░░░░░")
            print("░░░░░░░░░░█░▄░█▀░▄░░░░░░░▀▀░░█░░░░░░░░░")
            print("░░░░░░░░░░█░░▀▀▀▀░░░░░░░░░░░░█░░░░░░░░░")
            print("░░░░░░░░░░█░░░░░░░░░░░░░░░░░░█░░░░░░░░░")
            print("░░░░░░░░░░█░░░░░░░░░░░░░░░░░░█░░░░░░░░░")
            print("░░░░░░░░░░░█░░▄▄░░▄▄▄▄░░▄▄░░█░░░░░░░░░░")
            print("░░░░░░░░░░░█░▄▀█░▄▀░░█░▄▀█░▄▀░░░░░░░░░░")
            print("░░░░░░░░░░░░▀░░░▀░░░░░▀░░░▀░░░░░░░░░░░░")
            v += 1

        waktu = str(datetime.now())
        info_kelembaban = id_ruangan, namaa_ruangan, waktu, kelembaban
        tbl_kelembaban.append(info_kelembaban)
        sq = "insert into "+pilih_tabel + \
            " (id_ruangan,nama_ruangan,waktu,kelembaban) values (%s,%s,%s,%s)"
        inpt = cursor.executemany(sq, tbl_kelembaban)
        print("Data Pengecekan Berhasil", tbl_kelembaban)

        nilai += 1


# Sensor Suhu
if sensor == 2:
    pilih_tabel = 'tb_suhu'
    nilai = 0
    jps = int(jumlah_pengecekan)
    wps = int(lama_pengecekan)
    nilai_max = jps
    while nilai < nilai_max:
        kelembaban = str(random.randint(10, 37))
        t_end = time.time() + 60 * wps
        v = 0
        tbl_kelembaban = []

        while time.time() < t_end:
            print("░░░░░░░░░░░▄▀▄▀▀▀▀▄▀▄░░░░░░░░░░░░░░░░░░")
            print("░░░░░░░░░░░█░░░░░░░░▀▄░░░░░░▄░░░░░░░░░░")
            print("░░░░░░░░░░█░░▀░░▀░░░░░▀▄▄░░█░█░░░░░░░░░")
            print("░░░░░░░░░░█░▄░█▀░▄░░░░░░░▀▀░░█░░░░░░░░░")
            print("░░░░░░░░░░█░░▀▀▀▀░░░░░░░░░░░░█░░░░░░░░░")
            print("░░░░░░░░░░█░░░░░░░░░░░░░░░░░░█░░░░░░░░░")
            print("░░░░░░░░░░█░░░░░░░░░░░░░░░░░░█░░░░░░░░░")
            print("░░░░░░░░░░░█░░▄▄░░▄▄▄▄░░▄▄░░█░░░░░░░░░░")
            print("░░░░░░░░░░░█░▄▀█░▄▀░░█░▄▀█░▄▀░░░░░░░░░░")
            print("░░░░░░░░░░░░▀░░░▀░░░░░▀░░░▀░░░░░░░░░░░░")
            v += 1

        waktu = str(datetime.now())
        inp_kelembaban = id_ruangan, namaa_ruangan, waktu, kelembaban
        tbl_kelembaban.append(inp_kelembaban)
        sq = "insert into "+pilih_tabel + \
            " (id_ruangan,nama_ruangan,waktu,suhu) values (%s,%s,%s,%s)"
        inpt = cursor.executemany(sq, tbl_kelembaban)
        print("Data Pengecekan Berhasil", tbl_kelembaban)

        nilai += 1

database.commit()
database.close()
