let questions = [
    {
        "id": 1,
        "question": "Which statement best describes Quality Assurance (QA)?",
        "options": [
            "Running test cases on the finished product",
            "A process-focused activity that aims to prevent defects",
            "Fixing the bugs found by testers",
            "Approving the release on behalf of the client"
        ],
        "correctAnswer": "b",
        "explanation": "QA focuses on improving processes to prevent defects."
    },
    {
        "id": 2,
        "question": "Quality Control (QC) is best described as:",
        "options": [
            "Defining coding standards for the team",
            "A product-focused activity that detects defects in what was built",
            "Writing the project plan",
            "Training developers on best practices"
        ],
        "correctAnswer": "b",
        "explanation": "QC focuses on the product and finding defects in what was built."
    },
    {
        "id": 3,
        "question": "How does testing relate to QA and QC?",
        "options": [
            "Testing is the same thing as QA",
            "Testing is unrelated to QC",
            "Testing is one of the main activities within QC",
            "Testing replaces both QA and QC"
        ],
        "correctAnswer": "c",
        "explanation": "Testing is a major activity used in quality control."
    },
    {
        "id": 4,
        "question": "In the Waterfall model, formal testing usually starts:",
        "options": [
            "Before requirements are written",
            "In parallel with every two-week sprint",
            "After development of the whole product is complete",
            "Only after the product is released"
        ],
        "correctAnswer": "c",
        "explanation": "In the traditional Waterfall model, formal testing typically follows completion of development."
    },
    {
        "id": 5,
        "question": "In a healthy SDLC, what is the earliest phase where QA should get involved?",
        "options": [
            "Requirements analysis",
            "Coding",
            "Deployment",
            "Maintenance"
        ],
        "correctAnswer": "a",
        "explanation": "QA should participate early, starting during requirements analysis."
    },
    {
        "id": 6,
        "question": "Which is the correct order of STLC phases?",
        "options": [
            "Test planning → Requirement analysis → Test execution → Test case development → Test closure",
            "Requirement analysis → Test planning → Test case development → Environment setup → Test execution → Test closure",
            "Test case development → Requirement analysis → Test planning → Test closure → Test execution",
            "Environment setup → Test execution → Requirement analysis → Test planning → Test closure"
        ],
        "correctAnswer": "b",
        "explanation": "The listed STLC sequence starts with requirement analysis, then planning, test development, environment setup, execution, and closure."
    },
    {
        "id": 7,
        "question": "Which is a typical exit criterion for the test execution phase?",
        "options": [
            "The requirement document has been received",
            "The test environment has been requested",
            "All planned test cases are executed and no open critical bugs remain",
            "The test plan has been drafted"
        ],
        "correctAnswer": "c",
        "explanation": "Execution exit criteria commonly include completing planned tests and having no open critical defects."
    },
    {
        "id": 8,
        "question": "What is the main purpose of the daily stand-up in Scrum?",
        "options": [
            "To demo finished work to the client",
            "To share progress, today's plan and blockers in about 15 minutes",
            "To estimate every story in the backlog",
            "To review the whole sprint and decide improvements"
        ],
        "correctAnswer": "b",
        "explanation": "The daily Scrum helps the team coordinate progress, the day's plan, and blockers."
    },
    {
        "id": 9,
        "question": "In Scrum, who owns and prioritises the product backlog?",
        "options": [
            "Scrum Master",
            "QA Lead",
            "Product Owner",
            "Development team"
        ],
        "correctAnswer": "c",
        "explanation": "The Product Owner is accountable for managing and prioritising the product backlog."
    },
    {
        "id": 10,
        "question": "What is the purpose of a sprint retrospective?",
        "options": [
            "To show the working increment to stakeholders",
            "To plan the stories for the next sprint",
            "To discuss how the team worked and agree on process improvements",
            "To assign bugs to developers"
        ],
        "correctAnswer": "c",
        "explanation": "The retrospective examines how the team worked and identifies improvements."
    },
    {
        "id": 11,
        "question": "User story: \"As a user, I want my account to lock after repeated wrong passwords so that it stays secure.\" Which acceptance criterion is testable?",
        "options": [
            "The login should be secure",
            "The account should lock quickly",
            "Given 3 wrong passwords in a row, when the user tries a 4th time, then the account is locked for 15 minutes and a message is shown",
            "Users should feel safe logging in"
        ],
        "correctAnswer": "c",
        "explanation": "This criterion specifies a trigger, expected lock duration, and visible message, making it testable."
    },
    {
        "id": 12,
        "question": "Your team has run the same regression suite for six months and it no longer finds new bugs. Which testing principle explains this?",
        "options": [
            "Exhaustive testing is impossible",
            "Pesticide paradox",
            "Defect clustering",
            "Absence-of-errors fallacy"
        ],
        "correctAnswer": "b",
        "explanation": "The pesticide paradox describes tests losing effectiveness when repeatedly run without being updated."
    },
    {
        "id": 13,
        "question": "Who usually performs unit testing?",
        "options": [
            "Developers",
            "End users",
            "Business analysts",
            "The client's management"
        ],
        "correctAnswer": "a",
        "explanation": "Unit tests are usually written and performed by developers."
    },
    {
        "id": 14,
        "question": "User Acceptance Testing (UAT) is mainly performed by:",
        "options": [
            "The developer who wrote the code",
            "The DevOps engineer",
            "The automation tester",
            "The client or real end users"
        ],
        "correctAnswer": "d",
        "explanation": "UAT is mainly performed by the client or representative end users."
    },
    {
        "id": 15,
        "question": "Integration testing focuses on:",
        "options": [
            "A single function in isolation",
            "The interfaces and data flow between connected modules",
            "Whether the client accepts the product",
            "The look and feel of the page"
        ],
        "correctAnswer": "b",
        "explanation": "Integration testing checks interactions and data exchange between connected modules."
    },
    {
        "id": 16,
        "question": "System testing checks:",
        "options": [
            "Only the database queries",
            "Each line of code",
            "The complete, integrated application against the requirements",
            "Only the third-party payment gateway"
        ],
        "correctAnswer": "c",
        "explanation": "System testing evaluates the complete integrated application against requirements."
    },
    {
        "id": 17,
        "question": "A new build is deployed to QA. Before deeper testing, you check that the app opens, login works and the main pages load. This is:",
        "options": [
            "Smoke testing",
            "Regression testing",
            "UAT",
            "Performance testing"
        ],
        "correctAnswer": "a",
        "explanation": "Smoke testing checks whether the build's key functions work well enough for further testing."
    },
    {
        "id": 18,
        "question": "A developer fixed a bug in the coupon field on the checkout page. You quickly verify the fix and the area right around it. This is:",
        "options": [
            "Smoke testing",
            "Sanity testing",
            "Usability testing",
            "Compatibility testing"
        ],
        "correctAnswer": "b",
        "explanation": "Sanity testing is a focused check around a specific fix or change."
    },
    {
        "id": 19,
        "question": "A new payment method was added. You re-run existing checkout, cart and order-history tests to make sure nothing old broke. This is:",
        "options": [
            "Sanity testing",
            "Exploratory testing",
            "Unit testing",
            "Regression testing"
        ],
        "correctAnswer": "d",
        "explanation": "Regression testing checks that existing functionality still works after a change."
    },
    {
        "id": 20,
        "question": "Which statement about smoke vs sanity testing is correct?",
        "options": [
            "Smoke is broad and shallow; sanity is narrow and focused on a specific change",
            "Smoke is narrow and deep; sanity is broad and shallow",
            "Both are only done by developers",
            "Both are types of performance testing"
        ],
        "correctAnswer": "a",
        "explanation": "Smoke testing is broad and shallow; sanity testing is narrower and focused on a change."
    },
    {
        "id": 21,
        "question": "Checking that the website works correctly on Chrome, Firefox, Safari and an Android phone is:",
        "options": [
            "Security testing",
            "Load testing",
            "Compatibility testing",
            "Unit testing"
        ],
        "correctAnswer": "c",
        "explanation": "Compatibility testing checks behavior across browsers, devices, and environments."
    },
    {
        "id": 22,
        "question": "Checking whether the home page still loads within 3 seconds when 500 users open it at the same time is:",
        "options": [
            "Usability testing",
            "Performance (load) testing",
            "Sanity testing",
            "Accessibility testing"
        ],
        "correctAnswer": "b",
        "explanation": "Load testing measures behavior under an expected user or request load."
    },
    {
        "id": 23,
        "question": "You change the user ID in the URL from /profile/101 to /profile/102 and can see another user's details. Which type of testing found this issue?",
        "options": [
            "Compatibility testing",
            "Usability testing",
            "Smoke testing",
            "Security testing"
        ],
        "correctAnswer": "d",
        "explanation": "Accessing another user's data by changing an identifier is an authorization/security issue."
    },
    {
        "id": 24,
        "question": "Which is the best example of a usability test idea?",
        "options": [
            "Can a first-time visitor find the \"Contact us\" page without help?",
            "Does the server handle 1,000 requests per second?",
            "Does the API return status 200?",
            "Is the password stored encrypted?"
        ],
        "correctAnswer": "a",
        "explanation": "Usability testing checks whether people can use the interface effectively without unnecessary help."
    },
    {
        "id": 25,
        "question": "An Age field accepts whole numbers from 18 to 60. Which value belongs to the valid equivalence class?",
        "options": [
            "17",
            "61",
            "-5",
            "35"
        ],
        "correctAnswer": "d",
        "explanation": "35 is within the accepted inclusive range of 18 through 60."
    },
    {
        "id": 26,
        "question": "For the same Age field (18–60), which set gives the best boundary value test data?",
        "options": [
            "17, 18, 60, 61",
            "18, 35, 60",
            "0, 18, 100",
            "20, 30, 40, 50"
        ],
        "correctAnswer": "a",
        "explanation": "Boundary testing checks just below, at, and just above each limit: 17, 18, 60, and 61."
    },
    {
        "id": 27,
        "question": "A Password field must be 8 to 16 characters long. Which length should be rejected?",
        "options": [
            "8",
            "16",
            "7",
            "12"
        ],
        "correctAnswer": "c",
        "explanation": "A length of 7 is below the minimum allowed password length of 8."
    },
    {
        "id": 28,
        "question": "A Quantity field accepts 1 to 10. What is the minimum number of numeric equivalence classes?",
        "options": [
            "2",
            "3",
            "10",
            "1"
        ],
        "correctAnswer": "b",
        "explanation": "The three numeric equivalence classes are below 1, valid values 1–10, and above 10."
    },
    {
        "id": 29,
        "question": "Why do testers use Boundary Value Analysis?",
        "options": [
            "It tests every possible input value",
            "It is used to design the page layout",
            "It replaces equivalence partitioning completely",
            "Defects often occur at the edges of input ranges"
        ],
        "correctAnswer": "d",
        "explanation": "Boundary value analysis targets range edges because defects often occur at boundaries."
    },
    {
        "id": 30,
        "question": "A decision table has 2 conditions, each with Yes/No values. How many rules (columns) does the full table have?",
        "options": [
            "2",
            "3",
            "4",
            "8"
        ],
        "correctAnswer": "c",
        "explanation": "Two binary conditions produce 2 × 2 = 4 possible combinations."
    },
    {
        "id": 31,
        "question": "Discount rule: members get 10% off orders of ₹1,000 or more; non-members get 5% off orders of ₹1,000 or more; orders below ₹1,000 get no discount. What does a non-member with a ₹1,500 order get?",
        "options": [
            "10%",
            "5%",
            "0%",
            "15%"
        ],
        "correctAnswer": "b",
        "explanation": "A non-member order of ₹1,500 meets the threshold and receives the 5% non-member discount."
    },
    {
        "id": 32,
        "question": "State transition testing is the best fit for which feature?",
        "options": [
            "An order status that moves Placed → Shipped → Delivered → Returned",
            "A static \"About us\" page",
            "The colour of a button",
            "The spelling of a page heading"
        ],
        "correctAnswer": "a",
        "explanation": "State transition testing covers changes between defined states, such as order statuses."
    },
    {
        "id": 33,
        "question": "An account locks after 3 wrong passwords. While the account is in the Locked state, the user enters the correct password. What is the expected result?",
        "options": [
            "The user is logged in normally",
            "The wrong-attempt counter resets to 0 and login succeeds",
            "The app crashes",
            "The account stays locked and a \"locked\" message is shown"
        ],
        "correctAnswer": "d",
        "explanation": "The stated locked-state behavior means the account remains locked and displays a locked message."
    },
    {
        "id": 34,
        "question": "Error guessing as a technique mainly relies on:",
        "options": [
            "A formula from the requirements",
            "Automation scripts",
            "The tester's experience and knowledge of past defects",
            "The developer's unit tests"
        ],
        "correctAnswer": "c",
        "explanation": "Error guessing draws on tester experience and knowledge of common or past defects."
    },
    {
        "id": 35,
        "question": "Which is a negative test case for a login form?",
        "options": [
            "Log in with a valid email and valid password",
            "Submit the form with the password field left empty",
            "Click \"Forgot password\" and receive the reset email",
            "Log out after a successful login"
        ],
        "correctAnswer": "b",
        "explanation": "Submitting with a required password missing tests invalid input handling."
    },
    {
        "id": 36,
        "question": "Which inputs are good error-guessing ideas for a Name field?",
        "options": [
            "Only leading and trailing spaces",
            "Only special characters such as @#$",
            "Only a 300-character string",
            "All of the above"
        ],
        "correctAnswer": "d",
        "explanation": "Leading/trailing spaces, special characters, and unusually long strings are all useful error-guessing inputs."
    },
    {
        "id": 37,
        "question": "Which document defines the scope, schedule, resources, risks and entry/exit criteria of testing for a project?",
        "options": [
            "Bug report",
            "Test plan",
            "Test case",
            "Release notes"
        ],
        "correctAnswer": "b",
        "explanation": "A test plan defines project-specific scope, schedule, resources, risks, and entry/exit criteria."
    },
    {
        "id": 38,
        "question": "How does a test strategy differ from a test plan?",
        "options": [
            "A strategy is the high-level testing approach; a plan holds the project-specific details",
            "A strategy lists every test step; a plan only lists bugs",
            "They are always the same document",
            "A strategy is written after testing ends"
        ],
        "correctAnswer": "a",
        "explanation": "A strategy describes the high-level approach; a test plan records project-specific details."
    },
    {
        "id": 39,
        "question": "What is the main purpose of a Requirement Traceability Matrix (RTM)?",
        "options": [
            "To track the team's working hours",
            "To list the browsers to test on",
            "To store login credentials for test accounts",
            "To map each requirement to its test cases so coverage gaps are visible"
        ],
        "correctAnswer": "d",
        "explanation": "An RTM maps requirements to test cases so missing test coverage can be identified."
    },
    {
        "id": 40,
        "question": "Which statement about test scenarios and test cases is correct?",
        "options": [
            "A test case is shorter than a test scenario",
            "Scenarios contain test data; test cases never do",
            "A scenario says what to test in one line; a test case gives the steps, test data and expected result",
            "They are only written after the product is released"
        ],
        "correctAnswer": "c",
        "explanation": "A scenario describes what to test; a case specifies steps, data, and expected results."
    },
    {
        "id": 41,
        "question": "For the step \"Enter abc@ in Email and click Submit\", which is the best expected result?",
        "options": [
            "The error \"Please enter a valid email address\" appears below the Email field and the form is not submitted",
            "It should work properly",
            "An error should come",
            "The page behaves as expected"
        ],
        "correctAnswer": "a",
        "explanation": "The expected result should identify the exact validation message and state that submission is blocked."
    },
    {
        "id": 42,
        "question": "Which of these should a good test case avoid?",
        "options": [
            "Clear preconditions",
            "Several unrelated checks and vague steps combined in one test case",
            "Specific test data",
            "One clear expected result per step"
        ],
        "correctAnswer": "b",
        "explanation": "Combining unrelated checks and vague steps makes a test case harder to execute and diagnose."
    },
    {
        "id": 43,
        "question": "A bug is marked Fixed. You retest it on the new build and the problem still happens. What status should the bug move to?",
        "options": [
            "Closed",
            "Deferred",
            "Rejected",
            "Reopened"
        ],
        "correctAnswer": "d",
        "explanation": "If the issue still occurs after a fix is retested, the bug should be reopened."
    },
    {
        "id": 44,
        "question": "The company name is misspelled in the home page header. How would you usually classify it?",
        "options": [
            "High severity, high priority",
            "High severity, low priority",
            "Low severity, high priority",
            "Low severity, low priority"
        ],
        "correctAnswer": "c",
        "explanation": "A misspelled company name is usually low severity but high priority because it is prominent and affects brand presentation."
    },
    {
        "id": 45,
        "question": "The app crashes when an admin exports a yearly report that is used once a year, and that date is 10 months away. How would you usually classify it?",
        "options": [
            "Low severity, high priority",
            "High severity, low priority",
            "Low severity, low priority",
            "It is not a bug"
        ],
        "correctAnswer": "b",
        "explanation": "The crash is high severity, while the distant annual usage date can make its priority lower in this scenario."
    },
    {
        "id": 46,
        "question": "Which information must a clear bug report include?",
        "options": [
            "Steps to reproduce",
            "Expected vs actual result",
            "Environment (browser, OS, build) and a screenshot or video",
            "All of the above"
        ],
        "correctAnswer": "d",
        "explanation": "A useful bug report includes reproducible steps, expected and actual results, environment details, and evidence."
    },
    {
        "id": 47,
        "question": "Which is the best bug title?",
        "options": [
            "Checkout: \"Place order\" button stays disabled after a valid card is entered",
            "Button not working",
            "Urgent!!! Fix ASAP",
            "Checkout page issue"
        ],
        "correctAnswer": "a",
        "explanation": "The best title clearly names the location and observable failure condition."
    },
    {
        "id": 48,
        "question": "In Jira, what does a workflow define?",
        "options": [
            "The list of team members on the project",
            "The colours of the board columns",
            "The statuses an issue can have and the transitions between them",
            "The sprint length"
        ],
        "correctAnswer": "c",
        "explanation": "A Jira workflow defines issue statuses and the transitions between those statuses."
    },
    {
        "id": 49,
        "question": "Which of these is a semantic HTML5 element?",
        "options": [
            "<div>",
            "<span>",
            "<nav>",
            "<b>"
        ],
        "correctAnswer": "c",
        "explanation": "The nav element is semantic HTML; div, span, and b do not express navigation structure."
    },
    {
        "id": 50,
        "question": "In DevTools you see a page built almost entirely from nested <div> tags. This \"div soup\" is a problem mainly because:",
        "options": [
            "Screen readers and other tools cannot understand the page structure",
            "The page will not load in Chrome",
            "Divs cannot be styled with CSS",
            "It makes images load slower"
        ],
        "correctAnswer": "a",
        "explanation": "Semantic elements communicate structure and meaning to assistive technologies and other tools."
    },
    {
        "id": 51,
        "question": "Which DevTools feature lets you test a page at mobile, tablet and desktop widths?",
        "options": [
            "Network tab",
            "Device toolbar (Toggle device emulation)",
            "Sources tab",
            "Memory tab"
        ],
        "correctAnswer": "b",
        "explanation": "The device toolbar emulates common viewport sizes and device settings."
    },
    {
        "id": 52,
        "question": "Which statement about CSS Flexbox and Grid is correct?",
        "options": [
            "Flexbox only works on mobile screens",
            "Grid cannot be used for responsive layouts",
            "Both are JavaScript libraries",
            "Flexbox lays items out in one direction; Grid handles rows and columns together"
        ],
        "correctAnswer": "d",
        "explanation": "Flexbox is primarily one-dimensional; Grid lays out content across rows and columns."
    },
    {
        "id": 53,
        "question": "Where in DevTools do you check for JavaScript errors on a page?",
        "options": [
            "Console tab",
            "Elements tab",
            "Application tab",
            "Lighthouse tab"
        ],
        "correctAnswer": "a",
        "explanation": "JavaScript runtime errors are displayed in the DevTools Console."
    },
    {
        "id": 54,
        "question": "What does document.querySelectorAll('img').length return when typed in the Console?",
        "options": [
            "The size of the first image in pixels",
            "The alt text of every image",
            "The number of <img> elements on the page",
            "An error, because it only works in code files"
        ],
        "correctAnswer": "c",
        "explanation": "querySelectorAll returns a NodeList, and length gives the number of matching image elements."
    },
    {
        "id": 55,
        "question": "Which Git command creates a new branch and switches to it?",
        "options": [
            "git clone feature-login",
            "git checkout -b feature-login",
            "git push feature-login",
            "git commit feature-login"
        ],
        "correctAnswer": "b",
        "explanation": "git checkout -b creates a branch and switches to it."
    },
    {
        "id": 56,
        "question": "What is the correct order to send your local changes to GitHub?",
        "options": [
            "git push → git add → git commit",
            "git commit → git push → git add",
            "git clone → git push → git add",
            "git add → git commit → git push"
        ],
        "correctAnswer": "d",
        "explanation": "The usual sequence is stage changes, commit them locally, then push the commit."
    },
    {
        "id": 57,
        "question": "What is a Pull Request (PR) on GitHub used for?",
        "options": [
            "Asking teammates to review your branch's changes and merge them",
            "Downloading a repository for the first time",
            "Deleting a branch",
            "Reporting a bug to GitHub"
        ],
        "correctAnswer": "a",
        "explanation": "A pull request proposes changes for review and possible merging into another branch."
    },
    {
        "id": 58,
        "question": "What is the correct alt text for a purely decorative divider image?",
        "options": [
            "alt=\"image\"",
            "alt=\"decorative divider line image\"",
            "alt=\"\" (empty)",
            "No alt attribute at all"
        ],
        "correctAnswer": "c",
        "explanation": "A purely decorative image should use an empty alt attribute so assistive technology can ignore it."
    },
    {
        "id": 59,
        "question": "During a keyboard-only accessibility check, which key moves focus to the next interactive element?",
        "options": [
            "Enter",
            "Tab",
            "Space",
            "Esc"
        ],
        "correctAnswer": "b",
        "explanation": "Tab normally moves keyboard focus to the next focusable interactive element."
    },
    {
        "id": 60,
        "question": "An email input shows only a placeholder \"Enter email\" and has no label. What is the best fix?",
        "options": [
            "Make the placeholder text bold",
            "Add aria-hidden=\"true\" to the input",
            "Put the word \"Email\" in a nearby <div>",
            "Add <label for=\"email\">Email</label> linked to <input id=\"email\">"
        ],
        "correctAnswer": "d",
        "explanation": "A programmatically associated label provides an accessible name for the email input."
    }
];


$(document).ready(function () {
    $(".result-container").hide();

    function escapeHTML(str) {
        return String(str)
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;")
            .replace(/'/g, "&#39;");
    }





    questions.forEach(ele => {
        $(".quiz-grid").append(
            `<div class="row">
                    <div class="col-1">${ele.id}</div>
                    <div class="col-11 options">
                    ${ele.question}
                        <div class="row mt-5 fg-danger">
                            <div class="col fs-sm fg-3 option"><input type="radio" name="options-${ele.id}[]" data-id="${ele.id}" value="a" /> A) ${escapeHTML(ele.options[0])}</div>
                            <div class="col fs-sm fg-3 option"><input type="radio" name="options-${ele.id}[]" data-id="${ele.id}" value="b" /> B) ${escapeHTML(ele.options[1])}</div>
                            <div class="col fs-sm fg-3 option"><input type="radio" name="options-${ele.id}[]" data-id="${ele.id}" value="c" /> C) ${escapeHTML(ele.options[2])}</div>
                            <div class="col fs-sm fg-3 option"><input type="radio" name="options-${ele.id}[]" data-id="${ele.id}" value="d" /> D) ${escapeHTML(ele.options[3])}</div>
                        </div>
                    </div>
                </div>`
        );
    });

    $(".quiz-grid").append(`
        <div class="row my-10 justify-content-end">
        <button class="submit w-fit btn-solid theme-danger">Submit</button>
    </div>
    `);







    let marks = { right: 0, wrong: 0 };
    let answers = [];

    $(document).on("click", ".option", function () {
        $(this).children().attr("checked", true);

        let id = $(this).children().attr("data-id");

        answers[id - 1] = $(this).children().val();
    });



    $(document).on("click", ".submit", function () {
        if (answers.length < questions.length) {
            alert("Please! Answer all the questions");
            return;
        }
        for (let i = 0; i < answers.length; i++) {
            if (answers[i] == null || answers[i].trim() === "") {
                alert("Please! Answer all the questions");
                return;
            }

            if (answers[i] == questions[i].correctAnswer) marks.right++;
            else marks.wrong++;
        }

        $(".options").each((ind, ele) => {
            ele.append(`<div class="row mt-5 explanation">
                <p class="fg-success">${questions[ind].explanation}</p>
                </div>
            `);
        });

        $(".total-questions").text(questions.length);
        $(".right-answers").text(marks.right);
        $(".wrong-answers").text(marks.wrong);
        $(".result-container").show();
        $(".quiz-container").hide();
    });

    $(".close-btn").click(function () {
        $(".result-container").hide();
        $(".quiz-container").show();
    });
});