# Lecture Survey Form

Author: Usman Moazzam

Course: CSDS 285 Linux Tools and Scripting

Project Presentation: [Uploaded to YouTube](https://youtu.be/sZrhdfOdjAE)

* SHORTER (1 min) Brainstorm Video at [6:36](https://youtu.be/sZrhdfOdjAE?t=396) and [uploaded separately](https://youtu.be/ystGzP1F4S4)
* FULL Brainstorming Video [uploaded to YouTube](https://youtu.be/ystGzP1F4S4)
* Project demo at [1:57](https://youtu.be/sZrhdfOdjAE?t=117) and [uploaded separately](https://youtu.be/qVjrP5sgjA8)
* Code snippets at [5:15](https://youtu.be/sZrhdfOdjAE?t=315)
* [Presentation Slides](/resources/Project2Presentation.pptx)

## About the Project

The purpose of this project was to apply learned PHP knowledge and prior HTML/JS skill to create a web application that allows students to submit questions, thank-you's, feedback, and other sentiments to their professors following lectures. The goal of the project was to bridge the communication gap between the student and the professor. 

From the student's perspective, there is a constant concern that any emails to the professor would get lost in their professor's inbox. Student's also sendom have the opportunity to share their opinions about lecture content, such as if they enjoyed the content and found it relevant/useful. It would be useful if the student's had a more informal and standardized manner of contacting the professor with messages relevant to the lecture.

From the professor's perspective, it is possible that students' questions could get lost in their busy inboxes, as being a lecturer is not their only responsibility to the school. It would be useful if the professor had a dedicated application to collecting student sentiments and questions, which would be moved to a separate folder in the professor's inbox.

This project attempts to address the student and professor's communication needs, creating a dedicated application for collecting the student's sentiments and questions about the lecture. standardizing its formatting, and sending it to the professor in a manner such that it can be filtered to a different part of the email, keeping it out of the clutter of the inbox.

## Motivation for New Project (Instead of Extension of Project 1)

Project 1 can be found [here](https://github.com/umoazzam/ExcelAnalysisProject).

I decided to go a different direction for Project 2 for a variety of reasons:

* Better real-life application: I felt this project was a lot more useful than the previous project. While my Project 1 was quite redundant and simple, I believe this project could actually be useful in concept and actual implementation. I also felt that this project was more unique than Project 1.
* Cleaner and more involved UI: I felt this project was a lot easier on the eyes :) This project included a lot more styling, making the web applications components cleaner and more standardized. In addition, this project took in a lot more user input, and I think the user interaction made it more interesting.
* Learnings from class: I felt that this project better demonstrated my learnings from class. First of all, this project leaned a lot harder on PHP and better utilized the course's PHP server. Second of all, this project was larger and more complex than Project 1, and required more work. Finally, I didn't have access to the server while creating the first project, which made it a lot harder to create a project that utilized class learnings; now that I have access, I believe this project better reflects my learnings in this class.

Overall, I was more satisfied with the product of this project compared to Project 1, and I believe it better exemplifies my knowledge and effort for this course.

## Implementation

### survey.php

The survey.php file generates the survey form on multiple pages. This file contains JS, HTML, and PHP code. The PHP code at the top creates and sends an email request, which is sent from a dedicated no-reply email address to the professor's address. The HTML code generates the structure and contents of the web app. The JS code at the bottom of the file codes the functionality of the next and previous buttons of the survey.

### email-template.php

The email-template.php file generates the template for the email sent to the professor. This email, which can be seen in the screenshots below, contains the student's contact information as well as their message for the professor.

### style.css

The style.css file structures the survey form and makes it look more appealing, standardizing the style and formatting for all features and components of the web application. 

## Demo + Screenshots

The project demo was [uploaded to YouTube](https://youtu.be/qVjrP5sgjA8).

Image 1: Survey Section 1

![Image 1: Survey Section 1](/resources/img/Page1.png)

Image 2: Survey Section 2

![Image 2: Survey Section 2](/resources/img/Page2.png)

Image 3: Survey Section 3/Submit Page

![Image 3: Survey Section 3](/resources/img/Page3.png)

Image 4: Submit Confirmation

![Image 4: Submit Confirmation](/resources/img/EmailConfirmation.png)

Image 5: Email Template

![Image 5: Email Template](/resources/img/EmailScreenshot.png)

## Future Improvements

While this project is a start to addressing the communication gap, there are other features that could be added to the project in the future to improve it:

* Added support for making a message anonymous: this would ensure that students would feel more comfortable sharing disinterest in specific topics without feeling like it would be received negatively
* Added functionality such that the professor can reply to the (currently) no-reply service to automatically respond to the student
* Added security to ensure only students from the professor's course can respond to the survey
* Generate statistics for the professor based on the ratings froms all their students for a specific lecture to help them improve their content delivery