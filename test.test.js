"@fixture TEST";
"@page http://localhost:8000";

"@test"["Click"] = {
    '1.Click link "BLOG"': function() {
        act.click(":containsExcludeChildren(BLOG)");
    },
    '2.Click link "ABOUT"': function() {
        act.click(":containsExcludeChildren(ABOUT)");
    },
    '3.Click link "CONTACT"': function() {
        act.click(":containsExcludeChildren(CONTACT)");
    },
    '4.Click link "PRICING"': function() {
        var actionTarget = function() {
            return $("#ourNav").find(":containsExcludeChildren(PRICING)");
        };
        act.click(actionTarget);
    }
};

