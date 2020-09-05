import axios from 'axios'
//Constants
const initialData = {
    fetching:false,
    arraySpaces:[]
}

const URL = "http://127.0.0.1:8000/api/spaces/"

const GET_SPACES = "GET_SPACES"
const GET_SPACES_SUCCESS = "GET_SPACES_SUCCESS"
const GET_SPACES_ERROR = "GET_SPACES_ERROR"

//Reducers
export default function reducer(state=initialData, action){
    switch(action.type){
        case GET_SPACES:
            return {...state, fetching: true}
        case GET_SPACES_SUCCESS:
            return {...state, arraySpaces:action.payload, fetching: false}
        case GET_SPACES_ERROR:
            return {...state, fetching: false, error: action.payload}
        default:
            return state
    }
}

//Actions (Thunk)
export function getSpacesAction(mail){
    return (dispatch, getState)=>{
        dispatch({
            type: GET_SPACES
        })
        return axios.get(URL+mail)
        .then(res => {
            dispatch({
                type: GET_SPACES_SUCCESS,
                payload: res.data
            })
        })
        .catch(err =>{
            console.log(err)
            dispatch({
                type: GET_SPACES_ERROR,
                payload: err.response.message
            })
        })
    }
}