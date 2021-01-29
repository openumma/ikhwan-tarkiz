
import 'package:flutter/material.dart';
import 'package:pemuda_bismillah/src/common/app_theme.dart';
import 'package:pemuda_bismillah/src/ui/aboutus/aboutus.dart';
import 'package:pemuda_bismillah/src/ui/home/home.dart';
import 'package:pemuda_bismillah/src/ui/home_drawer/drawer_user_controller.dart';
import 'package:pemuda_bismillah/src/ui/home_drawer/home_drawer.dart';
import 'package:pemuda_bismillah/src/ui/ticket/ticket.dart';

class NavigationHomeScreen extends StatefulWidget {
  @override
  _NavigationHomeScreenState createState() => _NavigationHomeScreenState();
}

class _NavigationHomeScreenState extends State<NavigationHomeScreen> {
  Widget screenView;
  DrawerIndex drawerIndex;
  AnimationController sliderAnimationController;

  @override
  void initState() {
    drawerIndex = DrawerIndex.HOME;
    screenView = Home();
    super.initState();
  }

  @override
  Widget build(BuildContext context) {
    return Container(
      color: AppTheme.nearlyWhite,
      child: SafeArea(
        top: false,
        bottom: false,
        child: Scaffold(
          backgroundColor: AppTheme.nearlyWhite,
          body: DrawerUserController(
            screenIndex: drawerIndex,
            drawerWidth: MediaQuery.of(context).size.width * 0.75,
            animationController: (AnimationController animationController) {
              sliderAnimationController = animationController;
            },
            onDrawerCall: (DrawerIndex drawerIndexdata) {
              changeIndex(drawerIndexdata);
            },
            screenView: screenView,
          ),
        ),
      ),
    );
  }

  void changeIndex(DrawerIndex drawerIndexdata) {
    if (drawerIndex != drawerIndexdata) {
      drawerIndex = drawerIndexdata;
      if (drawerIndex == DrawerIndex.HOME) {
        setState(() {
          screenView = Home();
        });
      } else if (drawerIndex == DrawerIndex.Ticket) {
        setState(() {
          screenView = Ticket();
        });
      } else if (drawerIndex == DrawerIndex.AboutUs) {
        setState(() {
          screenView = Home();
        });
      } else if (drawerIndex == DrawerIndex.Invite) {
        setState(() {
          //screenView = InviteFriend();
        });
      } else {
        //do in your way......
      }
    }
  }
}
