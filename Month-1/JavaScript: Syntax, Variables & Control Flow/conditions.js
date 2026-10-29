const user = {
    isRegistered: true,
    isLoggedIn: false,
    isAdmin: false,

}

if (user.isRegistered || user.isLoggedIn) {
    console.log("\n----------- Login successfully ---------------\n");

    if (user.isAdmin) {
        console.log("\n----------- Admin Dashboard ---------------\n");
    }
    else {
        console.log("\n----------- User Dashboard ---------------\n");
    }
}