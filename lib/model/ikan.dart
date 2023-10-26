// class Ikan{
//   int? id;
//   String? namaIkan;
//   String? jenisIkan;
//   String? warnaIkan;
//   String? habitatIkan;
  

//   Ikan({this.id, this.namaIkan, this.jenisIkan, this.warnaIkan, this.habitatIkan});

//   factory Ikan.fromJson(Map<String, dynamic> obj) {
//     return Ikan(
//       id: int.parse(obj['id'].toString()),
//       namaIkan: obj['nama_ikan'].toString(),
//       jenisIkan: obj['jenis_ikan'].toString(),
//       warnaIkan: obj['harga_ikan'].toString(),
//       habitatIkan: obj['harga_ikan'].toString(),
//     );
//   }
// }


class Ikan {
  String? id;
  String? namaIkan;
  String? jenisIkan;
  String? habitatIkan;
  String? warnaIkan;

  Ikan(
      {this.id,
      this.namaIkan,
      this.jenisIkan,
      this.habitatIkan,
      this.warnaIkan});
  factory Ikan.fromJson(Map<String, dynamic> obj) {
    return Ikan(
        id: obj['id'],
        namaIkan: obj['nama'],
        jenisIkan: obj['jenis'],
        habitatIkan: obj['habitat'],
        warnaIkan: obj['warna']);
  }
}
