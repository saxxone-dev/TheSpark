
/**
 * Sample JavaScript code for youtube.channels.list
 * See instructions for running APIs Explorer code samples locally:
 * https://developers.google.com/explorer-help/guides/code_samples#javascript
 */

function authenticate() {
    return gapi.auth2.getAuthInstance()
        .signIn({scope: "https://www.googleapis.com/auth/youtube.readonly"})
        .then(function() { console.log("Sign-in successful"); },
            function(err) { console.error("Error signing in", err); });
}
function loadClient() {
    gapi.client.setApiKey("AIzaSyC_QTggvlXLhQAbWHJCv86cBOUn7rbgPY8");
    return gapi.client.load("https://www.googleapis.com/discovery/v1/apis/youtube/v3/rest")
        .then(function() { console.log("GAPI client loaded for API"); },
            function(err) { console.error("Error loading GAPI client for API", err); });
}
// Make sure the client is loaded and sign-in is complete before calling this method.
function execute() {
    return gapi.client.youtube.channels.list({
        "part": "snippet",
        "forUsername": "thesparkng"
    })
        .then(function(response) {
                // Handle the results here (response.result has the parsed body).
                console.log("Response", response);
            },
            function(err) { console.error("Execute error", err); });
}
gapi.load("client:auth2", function() {
    gapi.auth2.init({client_id: "248072596563-lsv9hvju07obf47kja0ah5nnisph57h6.apps.googleusercontent.com"});
});
