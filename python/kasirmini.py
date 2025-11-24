nama = input("Masukkan nama barang: ")
harga = float(input("Masukkan harga barang: "))
jumlah = int(input("Masukkan jumlah beli: "))

total = harga * jumlah

if total > 91000:
    diskon = total * 0.01
else :
    diskon = 0

total_bayar = total - diskon 

print("\n===== STRUK DATA =====")
print(f"nama barang    : {nama}")
print(f"harga satuan   : {harga}")
print(f"jumlah satuan  : {jumlah}")
print(f"total harga    : {total}")
print(f"diskon         : {diskon}")
print(f"total bayar    : {total_bayar}")
print("=========================")