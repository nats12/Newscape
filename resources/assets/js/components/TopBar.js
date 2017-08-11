import React, { Component } from 'react';

class TopBar extends Component {
    constructor() {
        super()
    }

    render() {
        return(
            <div className="top-bar">
                <div className="row">
                    <div className="top-bar-left">
                        <ul className="menu">
                            <li className="menu-text"><h1>Newscape</h1></li>
                        </ul>
                    </div>
                    <div className="top-bar-right">
                    {/* Add github icon here */ }
                    </div>
                </div>
            </div>
        )
    }
}

export default TopBar;