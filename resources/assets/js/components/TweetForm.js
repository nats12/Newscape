import React, { Component } from 'react';
import ReactDOM from 'react-dom';


class TweetForm extends Component {
    constructor() {
        super()
    }

    render() {
        let tweetFormOpen = this.props.tweetFormOpen;
        return (

            <div className="row">
                <div className="large-4 columns">
                    <form>
                        <label>Input Label
                            <input type="text" placeholder=".medium-6.columns"/>
                        </label>

                        <label>Input Label
                            <input type="text" placeholder=".medium-6.columns"/>
                        </label>
                    </form>
                    <button type="button" className="button tiny" onClick={() => this.props.toggleTweetForm(tweetFormOpen)}>Close</button>
                </div>           
            </div>
        )
    }
}

export default TweetForm