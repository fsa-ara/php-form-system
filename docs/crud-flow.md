# CRUD flow

- [Dashboard](#dashboard)
    - [Display users](#display-users)
    - [Delete user](#delete-user)
    - [Truncate table](#truncate-table)
- [Form](#form)
    - [Create user](#create-user)
    - [Update user](#update-user)

---

## Dashboard

### Display users

```mermaid
flowchart TB
DBGA[("database->getAll()")]
DHR[["DashboardHandler->render()"]]
DV([Dashboard view])
I([index.php / router])
R[/Route: //]

I --> R
R --> DHR
DHR --> DBGA
DBGA --> DV
```

### Delete user

```mermaid
flowchart TB
CD[Click -> Delete]
DBD[("database->delete()")]
DHE[["DeleteHandler->exec()"]]
DV([Dashboard view])
I([index.php / router])
PR[POST Request]
R[/Route: /delete /]

CD --> PR
PR --> I
I --> R
R --> DHE
DHE --> DBD
DBD --> DV
```

### Truncate table

```mermaid
flowchart TB
CRT[Click -> Reset table]
DBT[("database->truncate()")]
DV([Dashboard view])
I([index.php / router])
PR[POST Request]
R[/Route: /truncate /]
THE[["TruncateHandler->exec()"]]

CRT --> PR
PR --> I
I --> R
R --> THE
THE --> DBT
DBT --> DV
```

## Form

### Create user

```mermaid
flowchart TB
CAU[Click -> Add user]
CIV{Is valid ?}
DBI[("database->insert()")]
DV([Dashboard view])
FHR[["FormHandler->render()"]]
FV([Form view])
FVC[["FormValidator->checking()"]]
I([index.php / router])
PR[POST request]
R[/Route: /form /]
S[Submit]
SR[Success / Redirect]

CAU --> I
I --> R
R --> FHR
FHR --> FV
FV --> S
S --> PR
PR --> FVC
FVC --> CIV
CIV --> |yes| DBI
CIV --> |no| FV
DBI --> SR
SR --> DV

```

### Edit user

```mermaid
flowchart TB
CE[Click -> Edit]
CIV{Is valid ?}
DBU[("database->update()")]
DG[("database->get()")]
DV([Dashboard view])
EHR[["EditHandler->render()"]]
FV([Form view])
FVC[["FormValidator->checking()"]]
GR[GET request]
I([index.php / router])
PR[POST request]
R[/Route: /edit /]
S[Submit]
SR[Success / Redirect]

CE --> GR
GR --> I
I --> R
R --> EHR
EHR --> DG
DG --> FV
FV --> S
S --> PR
PR --> FVC
FVC --> CIV
CIV --> |yes| DBU
CIV --> |no| FV
DBU --> SR
SR --> DV

```

---

[README](../README.md)
