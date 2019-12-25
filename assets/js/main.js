function linkify(inputText) {
    var replacedText, replacePattern1, replacePattern2, replacePattern3;

    //URLs starting with http://, https://, or ftp://
    replacePattern1 = /(\b(https?|ftp):\/\/[-A-Z0-9+&@#\/%?=~_|!:,.;]*[-A-Z0-9+&@#\/%=~_|])/gim;
    replacedText = inputText.replace(replacePattern1, '<a href="$1" target="_blank">$1</a>');

    //URLs starting with "www." (without // before it, or it'd re-link the ones done above).
    replacePattern2 = /(^|[^\/])(www\.[\S]+(\b|$))/gim;
    replacedText = replacedText.replace(replacePattern2, '$1<a href="http://$2" target="_blank">$2</a>');

    //Change email addresses to mailto:: links.
    replacePattern3 = /(([a-zA-Z0-9\-\_\.])+@[a-zA-Z\_]+?(\.[a-zA-Z]{2,6})+)/gim;
    replacedText = replacedText.replace(replacePattern3, '<a href="mailto:$1">$1</a>');

    return replacedText;
}

function getSpeakers() {
    var filename = 'assets/data/website_team_info.csv'
    Papa.parse(filename, {
        download: true,
        header: true,
        complete: function(results) {
            console.log(results);

            var speakers = results['data']
            var rows = speakers.length
            console.log(rows);

            for (var i = 0; i < rows; i++) {
                var currentSpeaker = speakers[i];
                // console.log(currentSpeaker);

                var name = currentSpeaker['First Name'] + " " + currentSpeaker['Last Name'];
                var first = currentSpeaker['First Name'].toLowerCase();
                console.log(name);
                console.log(first);

                var anchor = name.replace(/ /g, "_");

                var path = "assets/images/team/" + first + "-min.jpg";
                var department = currentSpeaker["MIT Department"];
                var program = currentSpeaker["Current Program"];

                var director = currentSpeaker["Director"];
                var bio = currentSpeaker["Bio for Website"];

                var position = currentSpeaker["Position"]

                var id = path.replace('.jpg', '').replace('.png', '').replace('.jpeg', '');

                bio = linkify(bio);

                bioMarkup = '<div class="row team-expanded-bio"><span class="anchor" id="team-text-' + first + '"></span>' +
                    '<div class="team col-md-5 col-lg-3 text-center"><a href="#team-text-' + first + '">' +
                    '<img class="team-picture" src="' + path + '"></a></div>' +
                    '<div class="col-md-7 col-lg-9"><div class="team-expanded-name">' + name + '</div>' +
                    '<div class="team-role-title-expanded">' + position + '</div>' +
                    '<div class="team-expanded-role">' + department + ' ' + program + '</div><div class="team-expanded-text">' +
                    bio + '</div></div></div>'

                teamSmallMarkup = '<div class="team col-sm-6 col-md-3" style="padding: 1%" id="' + first +
                    '"> <a href="#team-text-' + first + '">' +
                    '<img class="team-picture" src="' + path + '"></a>' +
                    '<div class="team-name">' + name + '</div>' +
                    '<div class="team-role-title">' + position + '</div>' +
                    '<div class="team-role">' + department + '</div>' +
                    '<div class="team-role">' + program + '</div>' +
                    '</div>'

                // if (director == 'Y') {
                //     teamSmallMarkup = '<div class="team col-sm-6 col-md-3" style="padding: 1%" id="' + first +
                //         '"> <a href="#team-text-' + first + '">' +
                //         '<img class="team-picture " src="' + path + '"></a>' +
                //         '<div class="team-name">' + name + '</div>' +
                //         '<div class="team-role">' + department + '</div>' +
                //         '<div class="team-role">' + program + '</div>' +
                //         '</div>'
                // }

                console.log(teamSmallMarkup);

                if (position == 'Managing Director') {
                    $(teamSmallMarkup).appendTo('#directors-expanded');
                } else {
                    $(teamSmallMarkup).appendTo('#team-expanded');
                }

                $(bioMarkup).appendTo('#bios');

            }

        }
    });
}

function escapeRegExp(str) {
    return str.replace(/([.*+?^=!:${}()|\[\]\/\\])/g, "\\$1");
}

function replaceAll(str, find, replace) {
    return str.replace(new RegExp(escapeRegExp(find), 'g'), replace);
}

getSpeakers();