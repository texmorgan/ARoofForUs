FORMAT: 1A
HOST: htt://arooffor.us

# A Roof For Us API

# Group Seekers

+ Model

    + Headers

            Content-Type: application/json

    + Body
    
        {
            "data" :[
                {
                    "id": 1,
                    "first_name": "Tom",
                    "last_name" : "Jones",
                    "gender" : "male",
                    "hair" : "brown",
                    "eyes" : "blue",
                    "birthday" : "10/23/1965",
                    "active" : 1
                },
                ...
            ]
        }
            
## Seekers List [/seekers{?active}{&number}{&page}]

### Get a list of seekers [GET]

+ Parameters

    + active (optional, bool, `1`) ... only list active Seekers
    + number (optional, integer, `15`) ... The number of results to return per page
    + page = `1` (optional, integer, `15`) ... Which page of the result data to return

+ Response 200
    
    + Headers

            Content-Type: application/json

    + Body
    
        {
            "data" :[
                {
                    "id": 1,
                    "first_name": "Tom",
                    "last_name" : "Jones",
                    "gender" : "male",
                    "hair" : "brown",
                    "eyes" : "blue",
                    "birthday" : "10/23/1965",
                    "active" : 1
                },
                ...
            ]
        }    

## Create a new seeker [/seeker]

+ Parameters

    + first_name (required, string) ... The first name of the seeker
    + last_name (required, string) ... The last name of the seeker
    + gender (optional, string) ... The gender of the seeker
    + birthday (required, date) ... The birthday of the seeker

### Create a seeker [POST]

+ Request

    + Headers

            Content-Type: application/json

    + Body

            {
                "first_name": "Tom",
                "last_name" : "Jones",
                "gender" : "male",
                "hair" : "brown",
                "eyes" : "blue",
                "birthday" : "10/23/1965"
            }

+ Response 201

    + Headers

            Content-Type: application/json

    + Body

        {
            "data" :[
                {
                    "id": "68a5sdf67"
                }
            ]
        }
            
+ Response 400

    + Headers

            Content-Type: application/json

    + Body

            {
                "error": "Invalid first name"
            }

## Seeker [/seeker/{id}]

+ Parameters

    + id (required, string, `68a5sdf67`) ... The seeker ID

### Get a single seeker [GET]

+ Response 200

    + Headers

            Content-Type: application/json

    + Body

        {
            "data" :[
                {
                    "id": "68a5sdf67",
                    "first_name":"Tom",
                    "last_name":"Jones",
                    "gender" : "male",
                    "hair" : "brown",
                    "eyes" : "blue",
                    "birthday" : "10/23/1965",
                    "active" : 1
                }
            ]
        }
    
+ Response 404

    + Headers

            Content-Type: application/json

    + Body

            {
                "error": "seeker not found"
            }

### Update a single seeker [PUT] 

+ Request

    + Headers

            Content-Type: application/json

    + Body

            {
                "first_name": "Tim"
            }

+ Response 200

    + Headers

            Content-Type: application/json

    + Body

        {
            "data" :[
                {
                    "id": "68a5sdf67",
                    "first_name" : "Tim",
                    "last_name" : "Jones",
                    "gender" : "male",
                    "birthday" : "10/23/1965",
                    "active" : 1
                }
            ]
        }


+ Response 404

    + Headers

            Content-Type: application/json

    + Body

            {
                "error": "seeker not found"
            }

### Delete a single seeker [DELETE]

Remove a seeker

+ Request

    + Headers

            Authorization: Bearer {access token}

+ Response 200

    + Headers

            Content-Type: application/json

    + Body

            {
            }


+ Response 404

    + Headers

            Content-Type: application/json

    + Body

            {
                "error": "seeker not found"
            }
