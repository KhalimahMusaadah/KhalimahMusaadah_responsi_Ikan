// // import 'package:flutter/material.dart';
// // //import 'package:responsi/helpers/user_info.dart';
// // //import 'package:responsi/ui/login_page.dart';
// // import 'package:responsi/ui/ikan_page.dart';
// // //import 'package:tokokita/ui/about_widget.dart';

// // void main() {
// //   runApp(const MyApp());
// // }

// // class MyApp extends StatefulWidget {
// //   const MyApp({Key? key}) : super(key: key);

// //   @override
// //   _MyAppState createState() => _MyAppState();
// // }

// // class _MyAppState extends State<MyApp> {
// //   Widget page = const CircularProgressIndicator();

// //   @override
// //   // void initState() {
// //   //   super.initState();
// //   //   isLogin();
// //   // }

// //   // void isLogin() async {
// //   //   var token = await UserInfo().getToken();
// //   //   if (token != null) {
// //   //     setState(() {
// //   //       page = const ProdukPage();
// //   //     });
// //   //   } else {
// //   //     setState(() {
// //   //       page = const LoginPage();
// //   //     });
// //   //   }
// //   // }

// //   @override
// //   Widget build(BuildContext context) {
// //     return MaterialApp(
// //       title: 'Ikan',
// //       debugShowCheckedModeBanner: false,
// //       home: IkanPage(),
// //     );
// //   }
// // }

// import 'package:flutter/material.dart';
// import 'package:http/http.dart' as http;
// import 'package:responsi/ui/ikan_form.dart';
// import 'package:responsi/ui/ikan_detail.dart';
// import 'package:responsi/ui/ikan_page.dart';

// void main() {
//   runApp(MyApp());
// }

// class MyApp extends StatelessWidget {
//   @override
//   Widget build(BuildContext context) {
//     return MaterialApp(
//       title: 'Nama-nama ikan',
//       theme: ThemeData(
//         primarySwatch: Colors.blue,
//       ),
//       home: MyHomePage(),
//     );
//   }
// }

// class MyHomePage extends StatelessWidget {
//   @override
//   Widget build(BuildContext context) {
//     return Scaffold(
//       appBar: AppBar(
//         title: Text('Daftar Nama Ikan'),
//       ),
//       body: IkanListWidget(),
//       floatingActionButton: FloatingActionButton(
//         onPressed: () {
//           // Navigasi ke halaman TugasForm untuk menambahkan tugas baru
//           Navigator.push(
//             context,
//             MaterialPageRoute(
//               builder: (context) => IkanForm(),
//             ),
//           );
//         },
//         child: Icon(Icons.add),
//       ),
//     );
//   }
// }

// class IkanListWidget extends StatefulWidget {
//   @override
//   _IkanListWidgetState createState() => _IkanListWidgetState();
// }

// class _IkanListWidgetState extends State<IkanListWidget> {
//   @override
//   Widget build(BuildContext context) {
//     return Container(
//       child: Center(
//         child: Text('Nama-nama ikan'),
//       ),
//     );
//   }
// }



import 'package:flutter/material.dart';
import 'package:responsi/helpers/user_info.dart';
import 'package:responsi/ui/ikan_page.dart';
//import 'package:responsi/ui/login_page.dart';
//import 'package:responsi/ui/ikan_page.dart';

void main() {
  runApp(const MyApp());
}

class MyApp extends StatefulWidget {
  const MyApp({Key? key}) : super(key: key);

  @override
  _MyAppState createState() => _MyAppState();
}

class _MyAppState extends State<MyApp> {
  Widget page = const CircularProgressIndicator();

  @override
  void initState() {
    super.initState();
    isLogin();
  }

  void isLogin() async {
    var token = await UserInfo().setToken("123");
    print(token);
    if (token != null) {
      setState(() {
        page = const IkanPage();
      });
    } else {
      setState(() {
        page = const LoginPage() as Widget;
      });
    }
  }

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'TEMAN DORI',
      debugShowCheckedModeBanner: false,
      home: page,
    );
  }
}

class LoginPage {
  const LoginPage();
}