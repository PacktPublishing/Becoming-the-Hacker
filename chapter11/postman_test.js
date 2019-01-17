pm.test("Status code is 200", function () {
    pm.response.to.have.status(200);
});

pm.test("Save Auth Token", function () {
    var data = pm.response.json();
    pm.environment.set("auth_token", data['access']['token']['id']);
});
