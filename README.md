# BackupExplorer

Project has been developed using AppGini and any issues you have with Installation or Configuration can likely be resolved via the AppGini docs:
https://bigprof.com/appgini/support

Install Guide: https://bigprof.com/appgini/help/working-with-generated-web-database-application/setup

The Project file (AXP File) can be edited via AppGini. 

At this stage, no custom code has been added however I will likely be adding in the future:
- Reporting
- Email Notifications (On logged failures, reminder emails, etc, etc)
- UI Modifications
- Log Audit mode (UI JUST for technicians auditing jobs and entering log entries)

Basic documentation on using the tool (Aswell as a demo) will be coming soon. 

The overall workflow is as below:

- Everything starts with the client
- Each client has Endpoints, Jobs and Log entries.
- Endpoints are linked to Jobs and Logs entries
- Each job is linked to Software, Methods and Destinations.
- After everything has been defined, at set intervals (Lets say monthly) you would run through the configure jobs and record the results (Screenshot of results, status, notes).


